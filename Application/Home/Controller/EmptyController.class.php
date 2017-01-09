<?php
namespace Home\Controller;
class EmptyController extends PublicController {
    public function index() {
    	$data = M('web_cof')->select();
    	$this->assign('title',$data[0]['title']);
    	$this->assign('keywords',$data[0]['keywords']);
    	$this->assign('des',$data[0]['des']);
    	$this->assign('logo',$data[0]['logo']);
    	header("HTTP/1.0 404 Not Found");
        $this->display('Public:404');

    }
}



