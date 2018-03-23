<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Filme extends CI_Controller 
{

	public function verificar_sessao()
	{
		if ($this->session->userdata('logado') == false) {
			redirect('dashboard/login');
		}
	}


	public function index($indice = null) 
	{
		$this->verificar_sessao();
		$this->db->select('*');
		$dados['filmes'] = $this->db->get('filmes')->result();
		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu'); 
		if($indice == 1){
			$data['msg'] = "Filme cadastrado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 2){
			$data['msg'] = "Não foi possivel cadastrar o filme.";
			$this->load->view('includes/msg_erro',$data); 
		}else if($indice == 3){
			$data['msg'] = "Filme excluido com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 4){
			$data['msg'] = "Não foi possivel excluir o filme.";
			$this->load->view('includes/msg_erro',$data); 
		}else if($indice == 5){
			$data['msg'] = "Filme atualizado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 6){
			$data['msg'] = "Não foi possivel atualizar o filme.";
			$this->load->view('includes/msg_erro',$data);
		} else {
			$data['msg'] = "";
			$this->load->view('includes/msg_sucesso', $data);
		}
		$this->load->view('filmes/listar_filme',$dados); 
		$this->load->view('includes/html_footer'); 
	}

	public function cadastro() 
	{
		$this->verificar_sessao();
		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu'); 
		$this->load->view('filmes/cadastro_filme'); 
		$this->load->view('includes/html_footer'); 
	}

	public function cadastrar()
	{
		
		$data['nome'] = $_POST['nome'];
		$data['genero'] = $_POST['genero'];
		

		if($this->db->insert('filmes',$data)){
			redirect('filme/index/1');
		}else{
			redirect('filme/index/2');
		}
	}

	public function excluir($id=null){
		$this->verificar_sessao();
		$this->db->where('id',$id);

		if($this->db->delete('filmes')){
			redirect('filme/index/3');
		}else{
			redirect('filme/index/4');
		}
	}

	public function atualizar($id = null,$indice = null){
		$this->verificar_sessao();
		$this->db->where('id',$id);

		$data['filme'] = $this->db->get('filmes')->result();

		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu');
		$this->load->view('filmes/editar_filme',$data); 
		$this->load->view('includes/html_footer'); 

	}

	public function salvar_atualizacao()
	{
		$this->verificar_sessao();
		$id = $_POST['id'];
		$data['nome'] = $_POST['nome'];
		$data['genero'] = $_POST['genero'];
		
		$this->db->where('id',$id);

		if($this->db->update('filmes',$data)){
			redirect('filme/index/5');
		}else{
			redirect('filme/index/6');
		}
	}

}
?>