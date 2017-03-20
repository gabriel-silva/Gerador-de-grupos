<?php
		$arrayAlunos=[
		"Alverti Felipe      ||",
		"Ana Beatriz         ||",
		"Bruce Willis        ||",
		"Bruna Rafaella      ||",
		"Danilo Soares       ||",
		"Davi Batista        ||",
		"Edna de Andrade     ||",
		"Eduardo Lonardi     ||",
		"Emanuele Garcia     ||",
		"Filipe Izidoro      ||",
	 	"Gabryelle Larissa   ||",
		"Jeislania Oliveira  ||",
		"Jhony Anderson      ||",
		"Jose Ronaldo        ||",
		"Joselma Beserra     ||",
		"Juliana Maria       ||",
		"Lucas Emanuel       ||",
		"Lucas Henrique      ||",
		"Luiz Carlos         ||",
		"Maria de Fátima     ||",
		"Maria Eduarda França||",
		"Matheus Henrique    ||",
		"Matheus Lucas       ||",
		"Milena Lins         ||",
		"Ponciana Andreia    ||",
		"Rhaiza Oliveira     ||",
		"Rhodolfo Antonio    ||",
		"Rivaldo Silva       ||",
		"Ruan Matheus        ||",
		"Thiago Vinicius     ||",
		"Vanessa Bandeira    ||",
		"Vinicius de Souza   ||",
		"Wanderson Jose      ||",
		"Yago Nascimento     ||",
		"Mariara Vitória     ||",
		"Douglas de Oliveira ||",
		"Nicolas Ramos       ||",
		"Marcelo Adson       ||"
	];

	$arrayAlunos = array_map(function($el) {
		return str_replace(" ", "&nbsp;", $el);
	}, $arrayAlunos);
	
	 echo "<pre>";
	for ($i = 0; $i < sizeof($arrayAlunos); $i++){
		if($arrayAlunos[$i] != ''){
			$checked = 'checked="checked"';
		}
		echo "<input type=\"checkbox\" name=\"grupAlunos[]\" value=\"{$arrayAlunos[$i]}\" $checked>{$arrayAlunos[$i]}<br>";
	}
	 echo "</pre>";
	
?>

<?php
	$sorteados = [];

	if(isset($_POST['submit']) && !empty($_POST['tema'])){
		
		if(!empty($_POST['grupAlunos'])) {
			
			foreach($_POST['grupAlunos'] as $grup){
				array_push($sorteados,$grup);
			}

			$cont = 1;
			for($i = 0;$i < count($sorteados); $i++){
				
				$temas[$i] = $cont;
				$cont++;

				if($cont == $_POST['tema']+1){
					$cont = 1;
				}

			}

			shuffle($sorteados);
			
			$cont=1;
			echo "<pre>";

			for($j=0;$j< $_POST['tema'];$j++){

				for($k=0;$k < count($sorteados);$k++){

					if($temas[$k]== $cont){

						echo $sorteados[$k];
					}

				}	
				echo " Tema ".$temas[$j]."<br>";
				$cont++;
				
				}
				echo "</pre>";
			}else{
			echo "<br>"."<h2>Você desmarcou todos os alunos!</h2>";
		}
	}
			
?>