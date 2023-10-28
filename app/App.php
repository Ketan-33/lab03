<?php 
namespace Company\Utility;
use Company\Utility\Controler\MainControler;
class App{
    public static function init(){
        echo "App is working";
        $controler = new MainControler();
        $controler->show();
    }
}