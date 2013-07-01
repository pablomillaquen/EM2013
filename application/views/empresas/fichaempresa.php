<?
if($empresas){
    foreach ($empresas->result() as $empresa) { ?>
  <p>Nombre Empresa:<?=$empresa->nomempresa; ?></p>
  <p>R.U.T.:<?=$empresa->rut; ?></p>
  <p>Dirección Comercial:<?=$empresa->dircomercial; ?></p>
  <p>Dirección Servicio Técnico:<?=$empresa->dirst; ?></p>
  <p>Teléfono:<?=$empresa->telefono; ?></p>
  <p>Fax:<?=$empresa->fax; ?></p>
  <p>Página Web:<?=$empresa->www; ?></p>
  <a href="<?php echo base_url('index.php/empresa/editar/'.$empresa->codempresa)?>">Editar empresa</a>
      <?
          }    
    }
else{
    echo "<p>No existe la empresa.</p>";
}
?>
</body>
</html>
