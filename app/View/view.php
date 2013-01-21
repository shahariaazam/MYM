<?php
class View{
    function index($view_file,$data){
        if(is_array($data)){
            extract($data);
        }
        include $view_file;
    }
}