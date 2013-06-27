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
 $cargo =array(
        'name'=> 'cargo',
        'placeholder'=>'Ej.: Jefe de Ventas'
     );
 $departamento =array(
        'name'=> 'departamento',
        'placeholder'=>'Ej: División Imagenología'
     );
 $fonofijo =array(
        'name'=> 'fonofijo',
        'placeholder'=>'+56322451127'
     );
 $celular =array(
        'name'=> 'celular',
        'placeholder'=>'Ej: +56972451127'
     );
 $email =array(
        'name'=> 'email',
        'placeholder'=>'Ej: persona@algo.cl'
     );
 $codempresa =array(
        'name'=> 'codempresa',
        'placeholder'=>'codigo de la empresa'
     );
 $fax =array(
        'name'=> 'fax',
        'placeholder'=>'+56322122435'
     )
         
?>
<?= form_label('Nombre', 'nomcontacto') ?>
<?= form_input($nomcontacto) ?>
<br>
<?= form_label('Cargo','cargo') ?>
<?= form_input($cargo) ?>
<br>
<?= form_label('Departamento','departamento') ?>
<?= form_input($departamento) ?>
<br>
<?= form_label('Teléfono Fijo','fonofijo') ?>
<?= form_input($fonofijo) ?>
<br>
<?= form_label('Celular','celular') ?>
<?= form_input($celular) ?>
<br>
<?= form_label('Email','email') ?>
<?= form_input($email) ?>
<br>
<?= form_label('Empresa','codempresa') ?>
<?= form_dropdown('codempresa', $empresas);?>
<!--?=form_input($codempresa)?-->
<!--?= form_dropdown('remeras', $opciones, 'large');?>-->
<br>
<?= form_label('Fax','fax') ?>
<?= form_input($fax) ?>
<br>
<?= form_submit('','Crear contacto') ?>
<?= form_close() ?>
   </div>
 </div>
    </body>
</html>
