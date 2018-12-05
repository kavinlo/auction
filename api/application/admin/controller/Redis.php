<?php

namespace app\admin\controller;

use think\Controller;
use Predis\Client;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;

class Redis extends Controller

{
    protected $middleware = ['Islogin'];

    public static $redis = null;
    public $accessKey = 'oiEH9VSyM7t6Sa8Mj5T6u8t228ih4u04ChFgp2OQ';
    public $secretKey = 'ONljn0iSjFws4bWpHFNYtXEfXXltAdXFh6k8o5b0';
    public $domain = 'http://pj6za7ep5.bkt.clouddn.com';
    public $bucketName = 'auction';

    public function __construct(){
        if( self::$redis === null ){
            self::$redis = new Client([
                'scheme' => 'tcp',
                'host'   => '127.0.0.1',
                'port'   => 6379,
            ]);
        }
        return self::$redis;    // 返回redis 对象
    }


    public function lpushUrl($imgUrl){  // lpush
        self::$redis->lpush('auction:qiniu',serialize($imgUrl));
    }


    public function brpop(){    // brpop
        /*===================七牛云 前置操作=================*/
        $upManager = new UploadManager();
        // 登录获取令牌
        $expire = 86400 * 3650; // 令牌过期时间10年
        $auth = new Auth($this->accessKey, $this->secretKey);
        $token = $auth->uploadToken($this->bucketName,null,$expire);

        ini_set('default_socket_timeout',-1);   // 设置socket 永不过期
        // 循环监听
        while(true){
            echo "消息队列启动,读取信息······ \r\n";
            // 从队列当中取数据 设置永不超时,（如果队列为空就这一只阻塞在这）
            $rawdata = self::$redis->brpop('auction:qiniu',0);
            $data = unserialize($rawdata[1]);  // 反序列化 转成数组
            echo "消息获取成功,保存到七牛云中······\r\n";
            $name = ltrim(strrchr($data['url'], '/'), '/');

            // 上传的文件
            $file = './public/'.$data['url'];
            list($ret, $error) = $upManager->putFile($token, $name, $file);

            // 判断是否成功
            if( $error !== null ){
                // 失败,重新lpush进队列
                self::$redis->lpush('jxshop:niqui',$rawdata[1]);
            }else{
                $new = $this->domain.'/'.$ret['key'];

                // 成功 更新数据库
                $lotImg = new \app\admin\model\LotImg();
                $lotImg -> where('id',$data['id'])->setField('img_url',$new);
                //删除硬盘文件
                @unlink($file);
                echo "上传成功 \r\n";
            }
        }

    }


}
