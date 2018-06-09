<?php
/*
*入口文件
*1.定义常量
*2.加载函数库
*3.启动框架
*/

//当前框架所在根目录
define("MPF", realpath("./"));
//框架的核心文件
define("CORE", MPF."/core");
//项目文件目录
define("APP", MPF."/app");
//模块
define("MODULE", "\app");

//是否开启调试模式, 默认开启
define("DEBUG", true);

if(DEBUG){
    ini_set('display_error', 'On');
}else{
    ini_set('display_error', 'Off');
}

//加载函数库
include CORE.'/common/function.php';

//启动框架
include CORE.'/mpf.php';
spl_autoload_register('\core\mpf::load');         //当new一个未包含的类时候，会去执行spl_autoload_register第一个参数函数名的函数，这个函数有一个参数就是需要new的类名
\core\mpf::run();
