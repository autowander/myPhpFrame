<?php
namespace core\lib\drive\log;
use core\lib\conf;

class file{
    private $path;
    public function __construct(){
        $this->path = conf::get('OPTION', 'log')['PATH'];
    }

    public function log($message, $file='log'){
        /**
         * 1.确定文件存储位置是否存在
         *  新建目录
         * 2，写入日志
         */
        //var_dp($this->path.date('YmdH'));
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'), '0777', true);
        }
        
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.txt', date('Y-m-d H:i:s')." ".json_encode($message).PHP_EOL, FILE_APPEND);
    }
}