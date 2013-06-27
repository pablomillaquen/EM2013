<?
if($contactos){
    foreach ($contactos->result() as $contacto) { ?>
  <p>Nombre contacto:<?=$contacto->nomcontacto; ?></p>
  <p>Empresa:<?=$contacto->codempresa; ?></p>
  <p>Cargo:<?=$contacto->cargo; ?></p>
  <p>Departamento:<?=$contacto->departamento; ?></p>
  <p>Teléfono Fijo:<?=$contacto->fonofijo; ?></p>
  <p>Celular:<?=$contacto->celular; ?></p>
  <p>Email:<?=$contacto->email; ?></p>
  <p>Fax:<?=$contacto->fax; ?></p>
  <?= "<a href=contacto/editar/".$contacto->codcontacto.">Editar contacto</a>";
        }    
    }
else{
    echo "<p>No existe la contacto.</p>";
}
?>
</body>
</html>
