<?=form_open('cursos/recibirdatos') ?>
<?
 $nombre =array(
        'name'=> 'nombre',
        'placeholder'=>'Escribe tu nombre'
    );
 $videos =array(
        'name'=> 'videos',
        'placeholder'=>'Cantidad videos del curso'
    )
?>
<?= form_label('Nombre', 'nombre') ?>
<?= form_input($nombre) ?>
<br>
<?= form_label('Número Videos','videos') ?>
<?= form_input($videos) ?>
<br>
<?= form_submit('','Subir Curso') ?>
<?= form_close() ?>
    </body>
</html>
