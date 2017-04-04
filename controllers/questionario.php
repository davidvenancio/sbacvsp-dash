<?php
/**
 * Slim - a micro PHP 5 framework
 *
 * @author      Juliana Mayumi Suzuki <fazedoradesite@gmail.com>
 * @version     0.0.1
 * @package     Fazedora De Site
 *
 */


class Questionario{

	protected $db;

	public function __construct($db){
		$this->db = $db;
	}


	public function Salva1($dados){

		$max_qst = 11;

		for($i=1; $i <= $max_qst; $i++){

			//salva pessoa
				if($i == 1){
					$query_pessoa=$this->db->prepare("INSERT INTO tb_pessoas set pessoa_nome = '".$dados[$i]."'");
					$query_pessoa->execute();

					$pessoa_id = $this->db->lastInsertId();

					$_SESSION['pessoa_id'] = $pessoa_id;
				}

				if($i == 2){
					$query_pessoa2=$this->db->prepare("UPDATE tb_pessoas set pessoa_crm = '".$dados[$i]."' WHERE pessoa_id = '".$pessoa_id."'");
					$query_pessoa2->execute();
				}

			
			if(is_array($dados[$i])){
				foreach($dados[$i] as $resp){
					$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."',  questao_id = '".$i."', resposta = '".$resp."'");	
					$query_buscados->execute();
				}
			} else {

				if(!$dados[$i])
					$dados[$i] = '-';
			
				$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."', questao_id = '".$i."', resposta = '".$dados[$i]."'");
				$query_buscados->execute();
			}

		}

	}

	public function Salva2($dados){

		$max_qst = 23;

		for($i=12; $i <= $max_qst; $i++){

			//salva pessoa
				$pessoa_id = $_SESSION['pessoa_id'];

			
			if(is_array($dados[$i])){
				foreach($dados[$i] as $resp){
					$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."',  questao_id = '".$i."', resposta = '".$resp."'");	
					$query_buscados->execute();
				}
			} else {

				if(!$dados[$i])
					$dados[$i] = '-';
			
				$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."', questao_id = '".$i."', resposta = '".$dados[$i]."'");
				$query_buscados->execute();
			}

		}

	}

	public function Salva3($dados){

		$max_qst = 59;

		for($i=24; $i <= $max_qst; $i++){

			//salva pessoa
				$pessoa_id = $_SESSION['pessoa_id'];

			
			if(is_array($dados[$i])){
				foreach($dados[$i] as $resp){
					$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."',  questao_id = '".$i."', resposta = '".$resp."'");	
					$query_buscados->execute();
				}
			} else {

				if(!$dados[$i])
					$dados[$i] = '-';
			
				$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."', questao_id = '".$i."', resposta = '".$dados[$i]."'");
				$query_buscados->execute();
			}

		}

	}

	public function Salva4($dados){

		$max_qst = 75;

		for($i=60; $i <= $max_qst; $i++){

			//salva pessoa
				$pessoa_id = $_SESSION['pessoa_id'];

			
			if(is_array($dados[$i])){
				foreach($dados[$i] as $resp){
					$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."',  questao_id = '".$i."', resposta = '".$resp."'");	
					$query_buscados->execute();
				}
			} else {

				if(!$dados[$i])
					$dados[$i] = '-';
			
				$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."', questao_id = '".$i."', resposta = '".$dados[$i]."'");
				$query_buscados->execute();
			}

		}

	}

	public function Salva5($dados){

		$max_qst = 91;

		for($i=76; $i <= $max_qst; $i++){

			//salva pessoa
				$pessoa_id = $_SESSION['pessoa_id'];

			
			if(is_array($dados[$i])){
				foreach($dados[$i] as $resp){
					$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."',  questao_id = '".$i."', resposta = '".$resp."'");	
					$query_buscados->execute();
				}
			} else {

				if(!$dados[$i])
					$dados[$i] = '-';
			
				$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."', questao_id = '".$i."', resposta = '".$dados[$i]."'");
				$query_buscados->execute();
			}

		}

	}

	public function Salva6($dados){

		$max_qst = 99;

		for($i=92; $i <= $max_qst; $i++){

			//salva pessoa
				$pessoa_id = $_SESSION['pessoa_id'];

			
			if(is_array($dados[$i])){
				foreach($dados[$i] as $resp){
					$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."',  questao_id = '".$i."', resposta = '".$resp."'");	
					$query_buscados->execute();
				}
			} else {

				if(!$dados[$i])
					$dados[$i] = '-';
			
				$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."', questao_id = '".$i."', resposta = '".$dados[$i]."'");
				$query_buscados->execute();
			}

		}

	}

	public function Salva7($dados){

		$max_qst = 122;

		for($i=100; $i <= $max_qst; $i++){

			//salva pessoa
				$pessoa_id = $_SESSION['pessoa_id'];

			
			if(is_array($dados[$i])){
				foreach($dados[$i] as $resp){
					$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."',  questao_id = '".$i."', resposta = '".$resp."'");	
					$query_buscados->execute();
				}
			} else {

				if(!$dados[$i])
					$dados[$i] = '-';
			
				$query_buscados=$this->db->prepare("INSERT INTO tb_respostas set pessoa_id = '".$pessoa_id."', questao_id = '".$i."', resposta = '".$dados[$i]."'");
				$query_buscados->execute();
			}

		}

	}

	public function EditaUsuario($dados){

		$cliente_nome = $dados['cliente_nome'];
		$cliente_login = $dados['cliente_login'];
		$cliente_id = $dados['cliente_id'];

		$query_buscados=$this->db->prepare("UPDATE tb_clientes set 
												cliente_nome = :cliente_nome,
												cliente_login = :cliente_login
											WHERE cliente_id = :cliente_id");
		
		$query_buscados->bindParam(':cliente_nome',$cliente_nome);
		$query_buscados->bindParam(':cliente_login',$cliente_login);
		$query_buscados->bindParam(':cliente_id',$cliente_id);
		$query_buscados->execute();	

	}

	public function EditaSenhaUsuario($dados){

		$cliente_senha = $dados['cliente_senha'];
		$cliente_id = $dados['cliente_id'];

		$query_buscados=$this->db->prepare("UPDATE tb_clientes set 
												cliente_senha = md5(:cliente_senha)
											WHERE cliente_id = :cliente_id");
		
		$query_buscados->bindParam(':cliente_senha',$cliente_senha);
		$query_buscados->bindParam(':cliente_id',$cliente_id);
		$query_buscados->execute();	

	}

	public function DeleteUsuario($dados){

		$cliente_id = $dados['cliente_id'];
		$cliente_status = 0;

		$query_buscados=$this->db->prepare("UPDATE tb_clientes set 
												cliente_status = :cliente_status
											WHERE cliente_id = :cliente_id");
		
		$query_buscados->bindParam(':cliente_status',$cliente_status);
		$query_buscados->bindParam(':cliente_id',$cliente_id);
		$query_buscados->execute();	

	}

	public function BuscaUsuario($cliente_id){
		$query=$this->db->prepare("SELECT * FROM tb_clientes WHERE cliente_status = 1 AND cliente_id = :cliente_id");

		$query->bindParam(':cliente_id',$cliente_id);
		$query->execute();

		$dados = $query->fetch();

		return $dados;
	}


};

