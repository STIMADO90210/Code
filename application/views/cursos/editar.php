<?= form_open('/Cursos/actualizar/'.$id); ?>

<?php
  $nombrecurso=array('name' => 'nombrecurso',
                'placeholder' => 'escribe tu nombre',
                'value' => $cursos->result()[0]->nombrecurso
              );

  $cantvideos=array('name' => 'cantvideos',
                            'placeholder' => 'cantidad de videos',
                            'value' => $cursos->result()[0]->cantvideos
                          );

  $categoriacurso=array('name' => 'categoriacurso',
                        'placeholder' => 'categoria curso',
                        'value' => $cursos->result()[0]->categoriacurso
                      );

 ?>
<label>
    Nombre:
  <?= form_input($nombrecurso);?>
</label>
<br>
<br>


<label>
    Numero de Videos:
    <?= form_input($cantvideos);?>
</label>
<br>
<br>
<label>
    Categoria Cursos:
    <?= form_input($categoriacurso);?>
</label>
<br>
<br>
<?= form_submit('','Actualizar Curso')  ?>
 <?= form_close();  ?>


 </body>
 </html>
