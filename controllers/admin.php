<?php
/**
 * Slim - a micro PHP 5 framework
 *
 * @author      Juliana Mayumi Suzuki <fazedoradesite@gmail.com>
 * @version     0.0.1
 * @package     Fazedora De Site
 *
 */


class Admin{

	protected $db;

	public function __construct($db){
		$this->db = $db;
	}


	public function Login($dados){

		$usuario_login = $dados['usuario_login'];
	 	$usuario_senha = $dados['usuario_senha'];

		$query=$this->db->prepare("SELECT * FROM tb_usuarios 
									WHERE usuario_login = :usuario_login 
										AND usuario_senha = md5(:usuario_senha)
										AND usuario_status = 1");

		$query->bindParam(':usuario_login',$usuario_login);
		$query->bindParam(':usuario_senha',$usuario_senha);
		$query->execute();

		$dados = $query->fetch();

		return $dados;
	}

	public function ListaUsuarios(){
		$query=$this->db->prepare("SELECT * FROM tb_usuarios WHERE usuario_status = 1 ORDER BY usuario_nome");
		$query->execute();

		$lista = $query->fetchAll();

		return $lista;
	}

	public function SalvaUsuario($dados){

		$usuario_nome = $dados['usuario_nome'];
		$usuario_login = $dados['usuario_login'];
		$usuario_senha = $dados['usuario_senha'];

		$query_buscados=$this->db->prepare("INSERT INTO tb_usuarios set 
												usuario_nome = :usuario_nome,
												usuario_login = :usuario_login,
												usuario_senha = md5(:usuario_senha)");
		
		$query_buscados->bindParam(':usuario_nome',$usuario_nome);
		$query_buscados->bindParam(':usuario_login',$usuario_login);
		$query_buscados->bindParam(':usuario_senha',$usuario_senha);
		$query_buscados->execute();	

	}

	public function EditaUsuario($dados){

		$usuario_nome = $dados['usuario_nome'];
		$usuario_login = $dados['usuario_login'];
		$usuario_id = $dados['usuario_id'];

		$query_buscados=$this->db->prepare("UPDATE tb_usuarios set 
												usuario_nome = :usuario_nome,
												usuario_login = :usuario_login
											WHERE usuario_id = :usuario_id");
		
		$query_buscados->bindParam(':usuario_nome',$usuario_nome);
		$query_buscados->bindParam(':usuario_login',$usuario_login);
		$query_buscados->bindParam(':usuario_id',$usuario_id);
		$query_buscados->execute();	

	}

	public function EditaSenhaUsuario($dados){

		$usuario_senha = $dados['usuario_senha'];
		$usuario_id = $dados['usuario_id'];

		$query_buscados=$this->db->prepare("UPDATE tb_usuarios set 
												usuario_senha = md5(:usuario_senha)
											WHERE usuario_id = :usuario_id");
		
		$query_buscados->bindParam(':usuario_senha',$usuario_senha);
		$query_buscados->bindParam(':usuario_id',$usuario_id);
		$query_buscados->execute();	

	}

	public function DeleteUsuario($dados){

		$usuario_id = $dados['usuario_id'];
		$usuario_status = 0;

		$query_buscados=$this->db->prepare("UPDATE tb_usuarios set 
												usuario_status = :usuario_status
											WHERE usuario_id = :usuario_id");
		
		$query_buscados->bindParam(':usuario_status',$usuario_status);
		$query_buscados->bindParam(':usuario_id',$usuario_id);
		$query_buscados->execute();	

	}

	public function BuscaUsuario($usuario_id){
		$query=$this->db->prepare("SELECT * FROM tb_usuarios WHERE usuario_status = 1 AND usuario_id = :usuario_id");

		$query->bindParam(':usuario_id',$usuario_id);
		$query->execute();

		$dados = $query->fetch();

		return $dados;
	}


};

