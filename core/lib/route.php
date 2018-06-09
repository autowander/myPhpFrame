<?php
namespace core\lib;

class route{
    public function __construct(){
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3.返回对应的控制器和方法
         */
        $path = ltrim($_SERVER['REQUEST_URI'], '/myPhpFrame');
        //var_dp($_SERVER['REQUEST_URI']);
        if(isset($path) &&  $path != '/' && $path != ''){
            //处理控制器和方法
            $pathArr = explode( '/', trim($path, '/'));
            if(isset($pathArr[0])){
                //返回控制器名称
                $this->ctrl = $pathArr[0];
            }
            unset($pathArr[0]);
            if(isset($pathArr[1])){
                //返回函数名称
                $this->action = $pathArr[1];
            }else{
                $this->action = 'index';
            }
            unset($pathArr[1]);
            
            // url多余部分转换成 GET
            // id/1/str/2/test/3
            $count = count($pathArr)+2;
            for($i=2;$i<$count;$i++){
                if(isset($pathArr[$i+1])){
                    $_GET[$pathArr[$i]] = $pathArr[++$i];
                }
            }
            
        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}