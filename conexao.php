<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "denuncia_anonima";

	if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
		
	} else {
		echo "Erro";
    }


    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
            $texto
            </div>";
    }

    function renomear_foto($vetor_foto) {
        $vtipo = explode("/", $vetor_foto['type']);
        $tipo = $vtipo[0] ?? '';
        $ext = $vtipo[1] ?? '';
        if ($ext == 'x-zip-compressed') {
          $ext = 'zip';
        }
        if ((!$vetor_foto['error'])) {
            $nome_arquivo = date('Ymdhms'). "." . $ext;
            move_uploaded_file($vetor_foto['tmp_name'], "midias/".$nome_arquivo);
            return $nome_arquivo;
        }
    }

    function data_f_br ($data_f) {
        $d = explode('-', $data_f);
        $data_escreve = $d[2] . "/".$d[1]. "/". $d[0];
        return $data_escreve;
    }
    


?>