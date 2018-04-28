<?php
namespace app\index\controller;
class Index
{
    public function index()
    {
        return  'aadsfasfdsafd';
    }

    public function singwa() {
        echo time();
    }

    public function hello($name = 'ThinkPHP5')
    {
        echo 'hessdggsg' . $name.time();
    }

}
