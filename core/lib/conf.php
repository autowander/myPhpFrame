<?php
namespace core\lib;

class conf {
    private static $conf = [];
    public static function get($name, $file){
        /**
         * 1.判断配置文件是否存在
         * 2.判断文件是否存在
         * 3.缓存配置
         */
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else{
            $path = MPF.'\core\config\\'.$file.'.php';
            if(is_file($path)){
                $conf = include $path;
                if(isset($conf[$name])){
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('没有做个配置项'.$name);
                }
            }else{
                throw new \Exception('找不到配置文件'.$file.'.php');
            }
        }
    }
    public static function all($file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else{
            $path = MPF.'\core\config\\'.$file.'.php';
            if(is_file($path)){
                $conf = include $path;
                self::$conf[$file] = $conf;
                return $conf;
            }else{
                throw new \Exception('找不到配置文件'.$file.'.php');
            }
        }
    }
}