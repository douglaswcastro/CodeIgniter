<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario extends CI_Controller { public function index($indice=null) 
    { 
        $this->db->select('*'); $dados['usuarios'] = $this->db->get('usuario')->result(); 
        $this->load->view('includes/html_header'); $this->load->view('includes/menu'); 
        if($indice==1){ $data['msg'] = "Usuario cadastrado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }
        else if($indice==2){ 
            $data['msg'] = "Não foi possível cadastrar o usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        }else if($indice==3){ $data['msg'] = "Usuario excluído com sucesso."; 
                $this->load->view('includes/msg_sucesso',$data); 
            }else if($indice==4){ $data['msg'] = "Não foi possível excluir o usuário."; 
                $this->load->view('includes/msg_erro',$data); 
            }else if($indice==5)
                { $data['msg'] = "Usuario atualizado com sucesso."; 
                    $this->load->view('includes/msg_sucesso',$data); 
                }else if($indice==6)
                    { $data['msg'] = "Não foi possível atualizar o usuário."; 
                        $this->load->view('includes/msg_erro',$data); 
                    } $this->load->view('listar_usuario',$dados); 
                    $this->load->view('includes/html_footer'); 
                } public function cadastro() 
                { $this->load->view('includes/html_header'); 
                    $this->load->view('includes/menu'); 
                    $this->load->view('cadastro_usuario'); 
                    $this->load->view('includes/html_footer'); 
                }
    }
?>