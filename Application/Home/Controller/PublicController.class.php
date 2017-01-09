<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {

	function _empty(){
        header("HTTP/1.0 404 Not Found");
        $data = M('web_cof')->select();
    	$this->assign('keywords',$data[0]['keywords']);
    	$this->assign('des',$data[0]['des']);
    	$this->assign('logo',$data[0]['logo']);
        $this->display('Public:404');
    }

}






