<h3>Listado de Empresas</h3>
<?
if($empresas){?>
  <table class='table table-striped table-bordered table-condensed'>
      <thead>
    <tr>
        <th>Nombre Empresa</th>
        <th>R.U.T.</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Generales</th>
        <th>OCs</th>
    </tr>
      </thead>
      <tbody>
<?
    foreach ($empresas->result() as $empresa) { 
        echo "<tr><td>".$empresa->alias."</td>";
        echo "<td>".$empresa->rut."</td>";
        echo "<td>".$empresa->dircomercial."</td>";
        echo "<td>".$empresa->telefono."</td>";
        echo "<td><a href=empresa/verficha/".$empresa->codempresa.">Ver Ficha</a>&nbsp<a href=empresa/editar/".$empresa->codempresa.">Editar</a></td>";
        echo "<td><a href=".$empresa->codempresa.">Hacer OC</a>&nbsp<a href=".$empresa->codempresa.">Ver OCs</a></td>";    
        echo "</tr>";
        } ?>
      </tbody>
  </table>
    <?
    }
else{
    echo "<p>No existen empresas.</p>";
}
?>
</body>
</html>
