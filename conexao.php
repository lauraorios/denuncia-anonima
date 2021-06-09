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
        if ((!$vetor_foto['error']) and ($tipo == "image") ) {
            $nome_arquivo = date('Ymdhms'). "." . $ext;
            move_uploaded_file($vetor_foto['tmp_name'], "image/".$nome_arquivo);
            return $nome_arquivo;
        }
    }

    function data_f_br ($data_f) {
        $d = explode('-', $data_f);
        $data_escreve = $d[2] . "/".$d[1]. "/". $d[0];
        return $data_escreve;
    }


    function hora_soma ($hora1, $hora2) {
      $h1 = explode(':', $hora1);
      $h2 = explode(':', $hora2);
      $hoF = $h1[0] + $h2[0];
      $minF = $h1[1] + $h2[1];
      $segF = $h1[2] + $h2[2];
      if (($hoF == 8) or ($hoF == 9)) {
        $hora_escreve = "0".$hoF . ":".$minF. ":". $segF. "0";
        } else if ($minF == 0) {
          $hora_escreve = $hoF . ":". "0".$minF. ":". $segF. "0";
        } else if (($minF == 0) AND ($hoF == 8) or ($hoF == 9)) {
          $hora_escreve = "0".$hoF . ":". "0".$minF. ":". $segF. "0";
        }
        else{
        $hora_escreve = $hoF . ":".$minF. ":". $segF. "0";
        }

      return $hora_escreve;
    }    


?>