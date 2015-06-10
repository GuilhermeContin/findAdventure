<?php 
class Controller_Local  extends Controller_Rest
{


	
	public function action_recebeLocal(){
		
		if(isset($_POST) && count($_POST) > 0){
			$local = Model_Local::forge();
            $local->idLocal = $_POST['idUsuario'];
			$local->nome = $_POST['nome'];
			$local->descricao = $_POST['descricao'];
			$local->cidade  = $_POST['cidade'];
			$local->latitude = $_POST['latitude'];
            $local->longitude  = $_POST['longitude'];
			$local->thumbs = $_POST['thumbs'];
			
			$local->save();
			
            
	}
             }

	public function get_retornaLocal()
    {
    	$retorno = Model_Local::find('all');
		return $this->response($retorno);
    }
}
?>