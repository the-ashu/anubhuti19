<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{//$data['valid']=true;

		$this->load->view('home');
	}

    public function prevent()
    {
        $this->load->view('pevent');
    }

    public function brochure()
    {
       // $this->load->view('navbar');
        $this->load->view('brochure');
    }

    public function events()
    {
        $this->load->view('events');
    }

    public function dance()
    {
        $this->load->view('dance');
    }
    public function duetdance()
    {
        $this->load->view('duetdance');
    }
    public function grpdance()
    {
        $this->load->view('groupdance');
    }

    public function solodance()
    {
        $this->load->view('solodance');
    }

    public function btstepup()
    {
        $this->load->view('btstepup');
    }

    public function singing()
    {
        $this->load->view('singing');
    }

    public function solosing()
    {
        $this->load->view('solosing');
    }
    public function instrusing()
    {
        $this->load->view('instrusing');
    }

    public function drama()
    {
        $this->load->view('drama');
    }

    public function nukkadnatak()
    {
        $this->load->view('nukkadnatak');
    }
    public function standupcomedy()
    {
        $this->load->view('standupcomedy');
    }
    public function stageplay()
    {
        $this->load->view('stageplay');
    }

    public function literary()
    {
        $this->load->view('literary');
    }

    public function ele()
    {
        $this->load->view('ele');
    }

    public function hle()
    {
        $this->load->view('coming');
    }
    public function auli()
    {
        $this->load->view('auli');
    }

    public function wordzone()
    {
        $this->load->view('wordzone');
    }
    public function jam()
    {
        $this->load->view('jam');
    }

    public function letusdiscuss()
    {
        $this->load->view('letusdiscuss');
    }

    public function poetryslam()
    {
        $this->load->view('poetryslam');
    }

    public function thepotboiler()
    {
        $this->load->view('thepotboiler');
    }

    public function art()
    {
        $this->load->view('coming');
    }

    public function pfac()
    {
        $this->load->view('pfac');
    }

    public function photography()
    {
        $this->load->view('photography');
    }

    public function videography()
    {
        $this->load->view('videography');
    }

    public function lan()
    {
        $this->load->view('coming');
    }

    public function online()
    {
        $this->load->view('coming');
    }

    public function informals()
    {
        $this->load->view('coming');
    }

    public function mranubhuti()
    {
        $this->load->view('coming');
    }

    public function team()
    {
        $this->load->view('team');
    }
}