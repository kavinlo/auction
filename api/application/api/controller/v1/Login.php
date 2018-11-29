<?php

namespace app\api\controller\v1;

use think\Controller;
use think\Request;
use app\api\model\Login as ModelLogin;
use \Firebase\JWT\JWT;

class Login extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */

    public function index()
    {

    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */

    // 注册
    public function create(Request $req)
    {

        // 表单验证
        $result = $this->validate($req->post(),'app\api\validate\Regist');
        if( $result !== true ){

            // 表单要验证失败 返回
            return error($result,400);
        }

        $data['uName'] = $req->post('uName');
        // md5
        $data['uPassword'] = md5($req->post('uPassword'));

        // 保存数据库
        ModelLogin::insert( $data );
        return success('注册成功');

    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */

    // 登录
    public function read(Request $req)
    {
        // 表单验证
        $result = $this->validate($req->param(),'app\api\validate\Login');
        if( $result !== true ){

            // 表单要验证失败 返回
            return error($result,400);
        }

        // 查询用户数据
        $data = ModelLogin::where('uName',$req->param('uName'))->where('uPassword',md5($req->param('uPassword')))->find();
        if( $data ){
            // 把用户的信息保存到 jwt
            $now = time();
            $jwtData = jwt();   // 公共函数 获取jtw 秘钥和数据
            $key = $jwtData['key']; // 秘钥
            $expire = $jwtData['expire']; // 过期时间
            // 定义令牌的数据
            $data = [
                'iat' => $now, // 当前时间
                'exp' => $now+$expire, //过期时间
                'id' => $data->id //用户ID
            ];

            // 生成 令牌
            $jwt = JWT::encode($data,$key);

            return success($jwt);
        }

        return error('用户不存在,或密码错误',403);

    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }



}
