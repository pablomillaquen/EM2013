<h3>Listado de contactos</h3>
<?
if($contactos){?>
  <table class='table table-striped table-bordered table-condensed'>
      <thead>
    <tr>
        <th>Nombre Contacto</th>
        <th>Apellido Contacto</th>
        <th>Empresa</th>
        <th>Cargo</th>
        <th>Celular</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
      </thead>
      <tbody>
<?
    foreach ($contactos->result() as $contacto) { 
        echo "<tr><td>".$contacto->nomcontacto."</td>";
        echo "<td>".$contacto->apellcontacto."</td>";
        foreach($empresas->result() as $empresa){
            if($empresa->codempresa==$contacto->codempresa){
                    echo "<td>".$empresa->alias."</td>";
                }
        }
        //echo "<td>".$contacto->codempresa."</td>";
        echo "<td>".$contacto->cargo."</td>";
        echo "<td>".$contacto->celular."</td>";
        echo "<td><a href=mailto:".$contacto->email.">Enviar Email</a></td>";
        echo "<td><a href=contacto/verficha/".$contacto->codcontacto.">Ver Ficha</a>&nbsp<a href=contacto/editar/".$contacto->codcontacto.">Editar</a></td>";
        echo "</tr>";
        } ?>
      </tbody>
  </table>
    <?
    }
else{
    echo "<p>No existen contactos.</p>";
}
?>
</body>
</html>
