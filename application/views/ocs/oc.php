<h3>Listado de Ordenes de Compra</h3>
<?
if($ocs){?>
  <table class='table table-striped table-bordered table-condensed'>
      <thead>
    <tr>
        <th>N°</th>
        <th>Fecha</th>
        <th>Empresa</th>
        <th>Descripción</th>
        <th>Estado</th>
        <th>Imprimir</th>
        <th>Acciones</th>
    </tr>
      </thead>
      <tbody>
<?
    foreach ($ocs->result() as $oc) { 
        echo "<tr><td>".$oc->numoc."</td>";
        echo "<td>".$oc->fecha."</td>";
        foreach($empresas->result() as $empresa){
            if($empresa->codempresa==$oc->codempresa){
                    echo "<td>".$empresa->alias."</td>";
                }
        }
        //echo "<td>".$oc->codempresa."</td>";
        echo "<td>".$oc->descripcionpres."</td>";
        foreach ($ocs->result() as $oc) { 
        echo "<tr><td>".$oc->numoc."</td>";
        echo "<td>".$oc->fecha."</td>";
        foreach($firmaocs->result() as $firmaoc){
            if($firmaoc->codoc==$oc->codoc){
                    echo "<td>".$firmaoc->firmado."</td>";
                }
        }
        echo "<td><a href='#'>Imprimir OC</a></td>";
        echo "<td><a href=oc/verficha/".$oc->codoc.">Ver OC</a>&nbsp<a href=oc/editar/".$oc->codoc.">Editar</a></td>";
        echo "</tr>";
    }}?>
      </tbody>
  </table>
    <?
    }
else{
    echo "<p>No existen oc.</p>";
}
?>
</body>
</html>
