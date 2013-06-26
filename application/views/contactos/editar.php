<?=form_open('contacto/actualizar/'. $codcontacto ) ?>
<?
 foreach ($contacto->result() as $row){ 
     $nomcontacto= $row->nomcontacto; 
     $cargo= $row->cargo;
     $depto= $row->depto;
     $fonofijo= $row->fonofijo;
     $celular= $row->celular;
     $email= $row->email;
     $codempresa= $row->codempresa;
     $fax= $row->fax;
 }
     
 $nomcontacto =array(
        'name'=> 'nomcontacto',
        'placeholder'=>'Escribe el nombre',
        'value' =>$nomcontacto
    );
 $cargo =array(
        'name'=> 'cargo',
        'placeholder'=>'Ej.: Representante de Ventas',
        'value' =>$cargo
     );
 $depto =array(
        'name'=> 'depto',
        'placeholder'=>'Ej: Depto. Medicina',
        'value' =>$depto
     );
 $fonofijo =array(
        'name'=> 'fonofijo',
        'placeholder'=>'+56322451127',
        'value' =>$fonofijo
     );
 $celular =array(
        'name'=> 'celular',
        'placeholder'=>'+56984511227',
        'value' =>$celular
     );
 $email =array(
        'name'=> 'email',
        'placeholder'=>'persona@empresa.cl',
        'value' =>$email
     );
 $codempresa =array(
        'name'=> 'codempresa',
        'placeholder'=>'Nombre de la empresa',
        'value' =>$codempresa
     );
 $fax =array(
        'name'=> 'fax',
        'placeholder'=>'+56984511227',
        'value' =>$fax
     )
?>
<?= form_label('Nombre', 'nomcontacto') ?>
<?= form_input($nomcontacto) ?>
<br>
<?= form_label('Cargo','cargo') ?>
<?= form_input($cargo) ?>
<br>
<?= form_label('Departamento','depto') ?>
<?= form_input($depto) ?>
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
<?= form_input($codempresa) ?>
<br>
<?= form_label('fax','fax') ?>
<?= form_input($fax) ?>
<br>
<?= form_submit('','Actualizar Contacto') ?>
<?= form_close() ?>
    </body>
</html>
