<?=form_open('contacto/actualizar/'. $codcontacto ) ?>
<?
 foreach ($contacto->result() as $row){ 
     $nomcontacto= $row->nomcontacto; 
     $apellcontacto= $row->apellcontacto;
     $cargo= $row->cargo;
     $departamento= $row->departamento;
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
 $apellcontacto =array(
        'name'=> 'apellcontacto',
        'placeholder'=>'Escribe el apellido',
        'value' =>$apellcontacto
    );
 $cargo =array(
        'name'=> 'cargo',
        'placeholder'=>'Ej.: Representante de Ventas',
        'value' =>$cargo
     );
 $departamento =array(
        'name'=> 'departamento',
        'placeholder'=>'Ej: Depto. Medicina',
        'value' =>$departamento
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
<?= form_label('Apellido', 'apellcontacto') ?>
<?= form_input($apellcontacto) ?>
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
<?= form_input($codempresa) ?>
<br>
<?= form_label('fax','fax') ?>
<?= form_input($fax) ?>
<br>
<?= form_submit('','Actualizar Contacto') ?>
<?= form_close() ?>
    </body>
</html>
