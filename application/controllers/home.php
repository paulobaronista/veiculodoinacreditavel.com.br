<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Turner Caboré 2020';
        $data['description'] = 'Vote na Turner';
        $data['keywords'] = 'premio Caboré 2020, caber 2020, votos Caboré 2020, agencia Caboré 2020, turner 2020 cabore';
        $menu['home'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade(){
        $data['title'] = 'Turner Caboré 2020';
        $data['description'] = 'Vote na Turner';
        $data['keywords'] = 'premio Caboré 2020, caber 2020, votos Caboré 2020, agencia Caboré 2020, turner 2020 cabore';
        $menu['politicadeprivacidade'] = 'active';
		$conteudo['pagina_view'] = 'politicadeprivacidade_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
    }
    public function politicadecookies(){
        $data['title'] = 'Turner Caboré 2020';
        $data['description'] = 'Vote na Turner';
        $data['keywords'] = 'premio Caboré 2020, caber 2020, votos Caboré 2020, agencia Caboré 2020, turner 2020 cabore';
        $menu['politicadecookies'] = 'active';
		$conteudo['pagina_view'] = 'politicadecookies_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

}

/* Location: ./application/controllers/home.php */
