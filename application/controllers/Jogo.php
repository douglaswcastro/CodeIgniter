<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jogo extends CI_Controller 
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
		$dados['jogos'] = $this->db->get('jogos')->result();
		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu'); 
		if($indice == 1){
			$data['msg'] = "Jogo cadastrado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 2){
			$data['msg'] = "Não foi possivel cadastrar o jogo.";
			$this->load->view('includes/msg_erro',$data); 
		}else if($indice == 3){
			$data['msg'] = "Jogo excluido com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 4){
			$data['msg'] = "Não foi possivel excluir o jogo.";
			$this->load->view('includes/msg_erro',$data); 
		}else if($indice == 5){
			$data['msg'] = "Jogo atualizado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data); 
		}else if($indice == 6){
			$data['msg'] = "Não foi possivel atualizar o jogo.";
			$this->load->view('includes/msg_erro',$data); 
		}else {
			$data['msg'] = "";
			$this->load->view('includes/msg_erro',$data); 
		}
		$this->load->view('jogos/listar_jogo',$dados); 
		$this->load->view('includes/html_footer'); 
	}

	public function cadastro() 
	{
		$this->verificar_sessao();
		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu'); 
		$this->load->view('jogos/cadastro_jogo'); 
		$this->load->view('includes/html_footer'); 
	}

	public function cadastrar()
	{
		
		$data['nome'] = $_POST['nome'];
		$data['tipo'] = $_POST['tipo'];
		
		if($this->db->insert('jogos',$data)){
			redirect('jogo/index/1');
		}else{
			redirect('jogo/index/2');
		}
	}

	public function excluir($id=null){
		$this->verificar_sessao();
		$this->db->where('id',$id);

		if($this->db->delete('jogos')){
			redirect('jogo/index/3');
		}else{
			redirect('jogo/index/4');
		}
	}

	public function atualizar($id = null,$indice = null){
		$this->verificar_sessao();
		$this->db->where('id',$id);

		$data['jogo'] = $this->db->get('jogos')->result();

		$this->load->view('includes/html_header'); 
		$this->load->view('includes/menu');
		
		$this->load->view('jogos/editar_jogo',$data); 
		$this->load->view('includes/html_footer'); 

	}

	public function salvar_atualizacao()
	{
		$this->verificar_sessao();
		$id = $_POST['id'];
		$data['nome'] = $_POST['nome'];
		$data['tipo'] = $_POST['tipo'];
		

		$this->db->where('id',$id);

		if($this->db->update('jogos',$data)){
			redirect('jogo/index/5');
		}else{
			redirect('jogo/index/6');
		}
	}

}
?>