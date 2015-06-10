<?php 
class Controller_Home extends Controller_Base{

    public function action_index(){
    	\Layout::forge("home/index");
    }
    
    public function action_404(){
    	return Response::forge(View::forge('home/404'));
    }
}
