<?php
require "Lib/Controller/index.php";
class AppController extends Controller{
    public function page()
    {
        $this->model= new AppModel();
        $data=$this->model->index();
        $this->view->index('viewfile.php',$data);
    }
}