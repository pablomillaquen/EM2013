<?
if($empresas){
    foreach ($empresas->result() as $empresa) { 
        echo "<ul><li><a href=";
        echo $empresa->codempresa;
        echo ">"; 
        echo $empresa->nomempresa; 
        echo "</a></li></ul>";
        }
    }
else{
    echo "<p>No existen empresas.</p>";
}
?>
</body>
</html>