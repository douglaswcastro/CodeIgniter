<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller 
{ 

	public function verificar_sessao(){
		if($this->session->userdata('logado') == false){
			redirect('dashboard/login');
		}
	}

	public function index() 
	{ 
		$this->verificar_sessao();
		$this->db->select('*');
		$dados['usuarios'] = $this->db->get('usuario')->result();
		$dados['filmes'] = $this->db->get('filmes')->result();
		$dados['jogos'] = $this->db->get('jogos')->result();
		$valores['usuario'] = count($dados['usuarios']);
		$valores['filme'] = count($dados['filmes']);
		$valores['jogo'] = count($dados['jogos']);

		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu'); 
		$this->load->view('dashboard',$valores); 
		$this->load->view('includes/html_footer'); 
	}

	public function login(){
		$this->load->view('includes/html_header');
		$this->load->view('login');
	}

	public function logar(){
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);

		$this->db->where('senha',$senha);
		$this->db->where('email',$email);
		$this->db->where('status',1);
		$data['usuario'] = $this->db->get('usuario')->result();
		if(count($data['usuario']) == 1){
			
			$dados['nome'] = $data['usuario'][0]->nome;
			$dados['id'] = $data['usuario'][0]->idUsuario;
			$dados['logado'] = true;

			$this->session->set_userdata($dados);
			redirect('dashboard/index');
		}else{
			redirect('dashboard/login');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('dashboard');
	}
}
?>