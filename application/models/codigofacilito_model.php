<?php
defined('BASEPATH') OR exit('No direct script access allowed');

      class Codigofacilito_model extends CI_Model{
                    function __construct(){
                      parent::__construct();
                      $this->load->database();
                    }


                    function crearcurso($data){
                      $this->db->insert('cursos',array('nombrecurso'=>$data['nombrecurso'],'cantvideos'=>$data['cantvideos'],'categoriacurso'=>$data['categoriacurso']));
                    }

                    function obtenercurso()
                    {
                        $query=$this->db->get('cursos');
                                if($query->num_rows()>0){
                                    return $query;
                                }else{
                                    return false;
                                }
                    }


                    function obtenercursoid($id)
                    {
                      $this->db->where('idcurso',$id);
                        $query=$this->db->get('cursos');

                                if($query->num_rows()>0){
                                    return $query;
                                }else{
                                    return false;
                                }
                    }

                    function actualizarcurso($id,$data){
                      $datos=array(
                        'nombrecurso' => $this->input->post('nombrecurso'),
                        'cantvideos'  => $this->input->post('cantvideos'),
                        'categoriacurso'  => $this->input->post('categoriacurso')
                      );
                      $this->db->where('idcurso',$id);
                      $query=$this->db->update('cursos',$datos);

                    }

                    function eliminarcursoid($id){
                      $this->db->delete('cursos',array('idcurso'=>$id));
                    }

      }
 ?>
