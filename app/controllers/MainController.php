<?php

namespace app\controllers;

class MainController extends AppController {

//    public $layout = 'test';

    public function indexAction(){
//        $this->layout = 'test';
//        echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $name = 'John';
        $age = 30;

        $this->set(['name' => 'John','age'=>'30']);
    }

}