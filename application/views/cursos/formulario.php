<?= form_open('/Cursos/recibirdatos'); ?>

<?php
  $nombrecurso=array('name' => 'nombrecurso',
                'placeholder' => 'escribe tu nombre'
              );

  $cantvideos=array('name' => 'cantvideos',
                            'placeholder' => 'cantidad de videos'
                          );
  $categoriacurso=array('name' => 'categoriacurso',
                                                    'placeholder' => 'categoria curso'
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
<?= form_submit('','Subir Curso')  ?>
 <?= form_close();  ?>


 </body>
 </html>
