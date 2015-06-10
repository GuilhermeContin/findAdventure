<?php 
class Layout{
	
    public static function forge( $view, $data=null, $filter=false){
        $dataView = [];
        $dataView["content"] = Response::forge( \View::forge($view, $data, $filter) );
 
        echo \Response::forge( \View::forge("_template", $dataView) );
    }
    
}
?>