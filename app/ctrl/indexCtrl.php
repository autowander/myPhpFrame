<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\mpf{
    public function index(){
        $data = 'hello world';
        $this->assign('data', $data);
        $this->display('index.html');
    }
}