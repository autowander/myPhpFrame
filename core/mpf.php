<?php
namespace core;

class mpf{
    public static $classMap = [];
    private $assign;

    public static function run(){
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl.'Ctrl';               //控制器类名末加上 Ctrl
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'.php';     //控制器所在路径
        $ctrlClass = MODULE.'\ctrl\\'.$ctrlClass;
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
        }else{
            throw new \Exception('找不到控制器: '.$ctrlClass);
        }
    }

    public static function load($class){
        //自动加载类库
        //若已经加载过, 直接返回true
        if(isset($classMap[$class])){
            return true;
        }else{
            $class_rep = str_replace('\\', '/', $class);
            $file = MPF.'/'.$class_rep.'.php';
            if(is_file($file)){
                include($file);
                self::$classMap[$class] = $class_rep;
            }else{
                return false;
            }
        }
    }

    public function assign($name, $value){
        $this->assign[$name] = $value;
    }

    public function display($file){
        $file = APP.'/view/'.$file;
        if(is_file($file)){
            extract($this->assign);
            include $file;
        }
    }
}