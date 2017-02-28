<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Codigofacilito extends CI_Controller
{

                    function __construct()
                    {
                            parent::__construct	();
                    $this->load->helper('mihelper');
                    $this->load->helper('form');
                    $this->load->model('Codigofacilito_model');

                    }

                    public function index()
                    {
                    $this->load->library('menu');
                    $data['mi_menu'] = $this->menu->construirmenu(array('Inicio','Contactos','Cursos','Acerca De'));
                    $this->load->view('Codigofacilito/headers');
                    $this->load->view('Codigofacilito/bienvenido',$data);
                    }

                    public function otro(){
                        $this->load->view('Codigofacilito/headers');
                        $this->load->view('Codigofacilito/bienvenido');
                    }


                    



}
?>
