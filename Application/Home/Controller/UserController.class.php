<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function index()
    {
        echo 'user';
    }
    public function read($id){
        echo 'id=' .$id;
    }
   
}