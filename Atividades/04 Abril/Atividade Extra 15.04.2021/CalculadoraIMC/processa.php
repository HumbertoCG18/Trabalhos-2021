<?php 
		$peso = $_GET['peso'];
		$altura = $_GET['altura'];
        $idade = $_GET['idade'];
		
		$conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;
		
		$resultado = number_format($conta2);
		
		if(isset($resultado) && $resultado != '0'){;	
			echo '<h1>Seu IMC é:</h1>';
			echo '<h2>'.$resultado.'</h2>';
            echo '<h1>Sua Idade:</h1>';
			echo '<h2>'.$idade.'</h2>';
		}else{
			echo '<h1>Por favor, utilize apenas numeros!</h1>';	
		}
		?>