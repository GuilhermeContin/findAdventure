<?php 
class Controller_Login extends Controller_Base{

    public function action_index(){
        return Response::forge(View::forge('login/index'));
    }
    
    public function action_do_login(){
    	Response::redirect("home/index");
    }
}
