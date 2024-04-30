<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web_new extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->helper('url');
}
public function index()
{
$data['judul'] = "Halaman Depan";
$this->load->view('index',$data);
}
public function about()
{
$data['judul'] = "Halaman About";
$this->load->view('about', $data);
}
public function hub_kami()
{
$data['judul'] = "Halaman Hubungi Kami";
$this->load->view('hub_kami', $data);
}
}