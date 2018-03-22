<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller 
{ 

	public function index($indice = null) 
	{ 
		$this->db->select('*');
		$dados['usuarios'] = $this->db->get('usuario')->result();
		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu'); 
		if($indice == 1){
			$data['msg'] = "Usuário cadastrado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 2){
			$data['msg'] = "Não foi possivel cadastrar o usuario.";
			$this->load->view('includes/msg_erro',$data); 
		}else if($indice == 3){
			$data['msg'] = "Usuário excluido com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 4){
			$data['msg'] = "Não foi possivel excluir o usuario.";
			$this->load->view('includes/msg_erro',$data); 
		}
		$this->load->view('listar_usuario',$dados); 
		$this->load->view('includes/html_footer'); 
	}

	public function cadastro() 
	{ 
		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu'); 
		$this->load->view('cadastro_usuario'); 
		$this->load->view('includes/html_footer'); 
	}

	public function cadastrar()
	{
		$data['nome'] = $_POST['nome'];
		$data['cpf'] = $_POST['cpf'];
		$data['endereco'] = $_POST['endereco'];
		$data['nivel'] = $_POST['nivel'];
		$data['email'] = $_POST['email'];
		$data['senha'] = md5($_POST['senha']);
		$data['status'] = $_POST['status'];

		if($this->db->insert('usuario',$data)){
			redirect('usuario/1');
		}else{
			redirect('usuario/2');
		}
	}

	public function excluir($id=null){
		
		$this->db->where('idUsuario',$id);

		if($this->db->delete('usuario')){
			redirect('usuario/3');
		}else{
			redirect('usuario/4');
		}
	}
}
?>