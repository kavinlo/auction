<?php

namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;

class RedisStart extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('redis_start')->setDescription('start redis');
        // 设置参数
        
    }

    protected function execute(Input $input, Output $output)
    {
        // 指令输出
//    	$output->writeln(controller('admin\Redis')->brpop());
        $redis_start = new \app\admin\controller\Redis();
        $redis_start -> brpop();
    }
}
