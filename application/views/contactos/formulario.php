 <div class="container">
   <div class="hero-unit">
<?=form_open('/contacto/recibirdatos') ?>
<?
 $codcontacto =array(
        'name'=> 'codcontacto',
        'placeholder'=>'Escribe el código'
    );
 $nomcontacto =array(
        'name'=> 'nomcontacto',
        'placeholder'=>'Nombre de la contacto'
    );
 $rut =array(
        'name'=> 'rut',
        'placeholder'=>'Ej.: 12.345.678-9'
     );
 $dircomercial =array(
        'name'=> 'dircomercial',
        'placeholder'=>'Calle, Comuna, Ciudad'
     );
 $dirst =array(
        'name'=> 'dirst',
        'placeholder'=>'Si la dirección es diferente a la comercial'
     );
 $telefono =array(
        'name'=> 'telefono',
        'placeholder'=>'Ej: +56322451127'
     );
 $fax =array(
        'name'=> 'fax',
        'placeholder'=>'Ej: +56322122435'
     );
 $alias =array(
        'name'=> 'alias',
        'placeholder'=>'Nombre corto de la contacto'
     );
 $www =array(
        'name'=> 'www',
        'placeholder'=>'Ej: http://www.ccdm.cl'
     )
         
?>
<?= form_label('Nombre', 'nomcontacto') ?>
<?= form_input($nomcontacto) ?>
<br>
<?= form_label('R.U.T.','rut') ?>
<?= form_input($rut) ?>
<br>
<?= form_label('Dirección Comercial','dircomercial') ?>
<?= form_input($dircomercial) ?>
<br>
<?= form_label('Dirección Serv. Técnico','dirst') ?>
<?= form_input($dirst) ?>
<br>
<?= form_label('Teléfono','telefono') ?>
<?= form_input($telefono) ?>
<br>
<?= form_label('Fax','fax') ?>
<?= form_input($fax) ?>
<br>
<?= form_label('Nombre Corto','alias') ?>
<?= form_input($alias) ?>
<br>
<?= form_label('Página Web','www') ?>
<?= form_input($www) ?>
<br>
<?= form_submit('','Crear contacto') ?>
<?= form_close() ?>
   </div>
 </div>
    </body>
</html>
