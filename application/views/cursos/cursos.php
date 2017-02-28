<table>
  <tr>
    <td>cursos</td>
    <td>Cantidad</td>
    <td>Categoria</td>
  </tr>
<?php
          if($cursos){

                  foreach ($cursos->result() as $curso)
                  {
  ?>


                      <tr>
                        <td><a href="<?= $curso->idcurso ?>"><?= $curso->nombrecurso  ?></a></td>
                        <td><?= $curso->cantvideos  ?></td>
                        <td><?= $curso->categoriacurso  ?></td>
                      </tr>


  <?
                  }
                }else{
                  echo "El Nro de Resgistro  No Existe";
                }
  ?>

        </table>
       </body>
       </html>
