<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Cursos extends CI_Controller{


                    function __construct()
                    {
                                        parent::__construct	();
                                $this->load->helper('mihelper');
                                $this->load->helper('form');
                                $this->load->model('Codigofacilito_model');

                    }

                    function index()
                    {
                      $data['segmento'] = $this->uri->segment(3);
                      //var_dump($data['segmento']);
                        $this->load->view('Codigofacilito/headers');
                            if(!$data['segmento'])
                            {
                                 $data['cursos']=  $this->Codigofacilito_model->obtenercurso();
                            }else{
                                 $data['cursos']=  $this->Codigofacilito_model->obtenercursoid($data['segmento']);
                            }
                        $this->load->view('cursos/cursos',$data);
                    }


                    public function nuevo()
                    {
                                $this->load->view('Codigofacilito/headers');
                                $this->load->view('cursos/formulario');
                        }

                        public function  recibirdatos()
                        {
                                $data=array(
                                                        'nombrecurso'=>$this->input->post('nombrecurso'),
                                                        'cantvideos'=>$this->input->post('cantvideos'),
                                                        'categoriacurso'=>$this->input->post('categoriacurso'),
                                );
                                $this->Codigofacilito_model->crearcurso($data);
                                $this->load->view('Codigofacilito/headers');
                                $this->load->view('Codigofacilito/bienvenido');
                        }

                        function editar()
                        {
                          $data['id']=$this->uri->segment(3);

                          $data['cursos']=$this->Codigofacilito_model->obtenercursoid($data['id']);
                          $this->load->view('Codigofacilito/headers');
                          $this->load->view('cursos/editar',$data);
                        }

                        function borrar()
                        {
                          $id=$this->uri->segment(3);

                          $this->Codigofacilito_model->eliminarcursoid($id);

                        }

                        function actualizar()
                        {
                          $data=array(
                            'nombrecurso' => $this->input->post('nombrecurso'),
                            'cantvideos'  => $this->input->post('cantvideos'),
                            'categoriacurso'  => $this->input->post('categoriacurso')
                          );
                          $this->Codigofacilito_model->actualizarcurso($this->uri->segment(3),$data);
                          redirect(base_url());

                        }
}

?>
