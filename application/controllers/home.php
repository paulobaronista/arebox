<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Home | Arebox';
		$data['description'] = 'Arebox é uma empresa moderna com capacidade para atendê-lo com eficiência, qualidade e agilidade a um custo altamente competitivo';
		$data['keywords'] = 'caçamba, entulho, areia, pedra, agua potavel, caminhao pipa, caminhao de agua, carreto';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'home_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function quem_somos(){
		$data['title'] = 'Quem somos | Arebox';
		$data['description'] = 'Arebox é uma empresa moderna com capacidade para atendê-lo com eficiência, qualidade e agilidade a um custo altamente competitivo';
		$data['keywords'] = 'caçamba, entulho, areia, pedra, agua potavel, caminhao pipa, caminhao de agua, carreto';
		$menu['quem_somos'] = 'active';
		$conteudo['pagina_view'] = 'quem_somos_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function cacambas_para_entulhos(){
		$data['title'] = 'Caçambas | Arebox';
		$data['description'] = 'AREBOX! Esta é uma empresa moderna com capacidade para atendê-lo com eficiência, qualidade e agilidade a um custo altamente competitivo';
		$data['keywords'] = 'caçambas, entulho, transporte de entulho, entulho taboao, caçambas taboao, caçambas embu, caçambas cotia, camçambas zona zul';
		$menu['cacambas_para_entulhos'] = 'active';
		$conteudo['pagina_view'] = 'cacambas_para_entulhos_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function areia_pedra_derivados(){
		$data['title'] = 'Areia / Pedra | Arebox';
		$data['description'] = 'AREBOX! Esta é uma empresa moderna com capacidade para atendê-lo com eficiência, qualidade e agilidade a um custo altamente competitivo';
		$data['keywords'] = 'caçambas, entulho, transporte de entulho, entulho taboao, caçambas taboao, caçambas embu, caçambas cotia, camçambas zona zul';
		$menu['areia_pedra_derivados'] = 'active';
		$conteudo['pagina_view'] = 'areia_pedra_derivados_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	public function agua_potavel_da_rocha(){
		$data['title'] = 'Água da Rocha';
		$data['description'] = 'Agua da Rocha é uma empresa moderna com capacidade para atendê-lo com eficiência, qualidade e agilidade a um custo altamente competitivo';
		$data['keywords'] = 'agua potavel, caminhao pipa, caminhao piscina, caminhao dagua, caminhao de agua, transporte de agua, agua taboao, agua zona sul';
		$menu['agua_potavel_da_rocha'] = 'active';
		$conteudo['pagina_view'] = 'agua_potavel_da_rocha_view';
		$this->load->view('html_header', $data);
		//$this->load->view('header');
		//$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		//$this->load->view('rodape');
		$this->load->view('html_footer');
	}
}

/* Location: ./application/controllers/home.php */