
<?php


$dir = "arquivos/";

$lista = scandir($dir);

//print_r($lista);

foreach($lista as $lulu=>$dir){

    if ( ($lulu != '.') or ($lulu != "..") )
        print "<a href='arquivos/$dir'> $dir </a> <br>";
    
}

//echo '<a href="atv.php"> Voltar</a>';
?>