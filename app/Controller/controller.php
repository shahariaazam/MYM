<?php
class Controller{
    public $view;
    public $model;
    function __construct()
    {
        $this->view=new View();
        $this->model=new Model();
    }
    public function page()
    {
        $data=$this->model->info();
        $this->view->index('viewfile.php',$data);
    }
}