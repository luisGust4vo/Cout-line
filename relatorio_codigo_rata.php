<?php
$path = __DIR__."/lib/phpexcel/Classes/PHPExcel/RichText"; // caminho da pasta de scripts sql 
$migrations = [];
chdir($path);
$arquivos = glob("{T*.php}", GLOB_BRACE);
foreach ($arquivos as $nome_arquivo) {
    $arquivo = fopen( $nome_arquivo, 'r' );
    if ($arquivo == false) die('Não foi possível abrir o arquivo.');

    $quant = 0;
    while(!feof($arquivo)) {
        $linha = fgets($arquivo);
        if(strlen(trim($linha)) > 0) { 
            $quant++;  
            // if (((strpos($linha, "<script>") !== false) ||
            //  (strpos($linha, "</script>") !== false) ||
            //   (strpos($linha, "function ") !== false) ||
            //    (strpos($linha, "case") !== false) ||
            //      (strpos($linha, '<script type = "text/javascript">') !== false))
            //      && (strpos($linha, 'src="') == false)
            //      ) {
            //     echo $linha .'';
            // }        
        }
    } 
    fclose($arquivo);
    // echo "\n";
    echo $nome_arquivo. ";".$quant."\n";
    // echo '-----------------------------------------------------------------------------------------------------------------------------'."\n";
}
?>