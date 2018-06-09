<?php
namespace app\ctrl;

class indexCtrl extends \core\mpf{
    public function index(){
        $data = "hello world";
        $daat1 = "hello wf";
        $this->assign('data', $data);
        $this->assign('data1', $daat1);
        $this->display('index.html');
    }
}