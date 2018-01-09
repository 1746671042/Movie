<?php
//控制器控制mv
require_once './Framework/Controller.class.php';
class IndexController extends Controller{
    public function Index(){
     $this->smarty->display("index.tpl");
    }
    
}
