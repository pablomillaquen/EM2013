<?
if($empresas){
    foreach ($empresas->result() as $empresa) { ?>
<ul>
    <li>
        <a href="<?= $empresa->codEmpresa; ?>"><?= $empresa->nombreCurso; ?></a>
    </li>
</ul>
<? }
}
else{
    echo "<p>No existen empresas.</p>";
}
?>
</body>
</html>
