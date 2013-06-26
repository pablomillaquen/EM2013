<?=form_open('empresa/actualizar/'. $codempresa ) ?>
<?
 foreach ($empresa->result() as $row){ 
     $nomempresa= $row->nomempresa; 
     $rut= $row->rut;
     $dircomercial= $row->dircomercial;
     $dirst= $row->dirst;
     $telefono= $row->telefono;
     $fax= $row->fax;
     $alias= $row->alias;
     $www= $row->www;
 }
     
 $nomempresa =array(
        'name'=> 'nomempresa',
        'placeholder'=>'Escribe tu nombre',
        'value' =>$nomempresa
    );
 $rut =array(
        'name'=> 'rut',
        'placeholder'=>'Ej.: 12.345.678-9',
        'value' =>$rut
     );
 $dircomercial =array(
        'name'=> 'dircomercial',
        'placeholder'=>'Calle, Comuna, Ciudad',
        'value' =>$dircomercial
     );
 $dirst =array(
        'name'=> 'dirst',
        'placeholder'=>'Si la dirección es diferente a la comercial',
        'value' =>$dirst
     );
 $telefono =array(
        'name'=> 'telefono',
        'placeholder'=>'Ej: +56322451127',
        'value' =>$telefono
     );
 $fax =array(
        'name'=> 'fax',
        'placeholder'=>'Ej: +56322122435',
        'value' =>$fax
     );
 $alias =array(
        'name'=> 'alias',
        'placeholder'=>'Nombre corto de la empresa',
        'value' =>$alias
     );
 $www =array(
        'name'=> 'www',
        'placeholder'=>'Ej: http://www.ccdm.cl',
        'value' =>$www
     )
?>
<?= form_label('Nombre', 'nomempresa') ?>
<?= form_input($nomempresa) ?>
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
<?= form_submit('','Actualizar Empresa') ?>
<?= form_close() ?>
    </body>
</html>
