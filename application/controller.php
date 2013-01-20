<?php
class Controller{
    public $load;
    public $model;
    function __construct()
    {
        $this->load=new Load();
        $this->model=new Model();
    }
    public function page()
    {
        $data=$this->model->info();
        $this->load->view('views/viewfile.php',$data);
    }
}