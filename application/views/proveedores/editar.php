<?=form_open('empresas/actualizar/'. $codempresa ) ?>
<?
 foreach ($empresa->result() as $row){ 
     $nomEmpresa= $row->nomempresa; 
     $rut= $row->rut;
     $dirComercial= $row->dircomercial;
     $dirSt= $row->dirst;
     $telefono= $row->telefono;
     $fax= $row->fax;
     $alias= $row->alias;
     $www= $row->www;
 }
     
 $nomEmpresa =array(
        'name'=> 'nombre',
        'placeholder'=>'Escribe tu nombre',
        'value' =>$nombreq
        //'value' => $curso->result()[0]->nombreCurso
    );
 $rut =array(
        'name'=> 'videos',
        'placeholder'=>'Cantidad videos del curso',
        'value' =>$videoq
        //'value' => $curso->result()[0]->videosCurso
    )
?>
<?= form_label('Nombre', 'nomempresa') ?>
<?= form_input($nomEmpresa) ?>
<br>
<?= form_label('Número Videos','rut') ?>
<?= form_input($rut) ?>
<br>
<?= form_submit('','Actualizar Empresa') ?>
<?= form_close() ?>
    </body>
</html>
