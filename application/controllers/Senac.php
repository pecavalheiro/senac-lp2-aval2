<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Senac extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('welcome_message');
    }

    public function turma() {
        $this->load->helper('url');
        $this->load->database();

        $funcionarios = $this->db->query('SELECT * FROM usuarios')->result_array();


        $this->load->view('turma_legal', array(
            'funcionarios' => $funcionarios
        ));
    }

    public function cadastro() {
        $this->load->helper('url');
        $this->load->view('form_usuarios');
    }

    public function faz_cadastro() {

        $extensao = explode('.', $_FILES['foto']['name']);
        $extensao = array_pop($extensao);
        $nome_img = sha1(time()) . '.' . $extensao;
        $destino = FCPATH . 'uploads/';
        $caminho_completo = $destino . $nome_img;

        $this->load->helper('url');
        $this->load->database();

        $data = array(
            'nome' => $_POST['nome'],
            'usuario' => $_POST['email'],
            'senha' => sha1($_POST['senha']),
            'img' => $nome_img,
        );

        if (!$this->db->insert('usuarios', $data)) {
            echo $this->db->error();
        } else {
            move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_completo);
            redirect('/Senac/turma');
        }
    }

}
