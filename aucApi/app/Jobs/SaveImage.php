<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use DB;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;

class SaveImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $imgUrl;
    protected static $accessKey = 'oiEH9VSyM7t6Sa8Mj5T6u8t228ih4u04ChFgp2OQ';
    protected static $secretKey = 'ONljn0iSjFws4bWpHFNYtXEfXXltAdXFh6k8o5b0';

    public function __construct($url)
    {
        $this->imgUrl = $url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        file_put_contents('bb.txt','555');

        $upManager = new UploadManager();
        $auth = new Auth(self::$accessKey, self::$secretKey);


        $token = $auth->uploadToken('auction');

        list($ret, $error) = $upManager->put($token, time().'.png', $this->imgUrl);
        file_put_contents('bb.txt',$error);

    }
}
