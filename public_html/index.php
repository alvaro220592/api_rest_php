<?php

    require_once '../vendor/autoload.php';

    
    
    /*
    api = 0
    user = 1
    param = 2
    */
    if($_GET['url']){
        $url = explode('/', $_GET['url']);

        // saber se o usuario ta requisitando a api:
        if($url[0] === 'api'){
            $service = $url[1];
            
            $method = $_SERVER['REQUEST_METHOD'];
            
            try {
                call_user_func_array(array(new $service))
            } catch (\Exception $e) {
                //throw $th;
            }


        }
    }