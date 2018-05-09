<?php
echo date('d/m/Y H:i:s')."<br>";

echo $hoje = date('w')."<br>";

switch ($hoje) {
	case 0:
		$dia =  "domingo";
		break;
	
	case 1:
		$dia =  "segunda";
		break;
	
	case 2:
		$dia =  "terça";
		break;
		
	case 3:
		$dia =  "quarta";
		break;
			
	case 4:
		$dia =  "quinta";
		break;
	
	case 5:
		$dia =  "sexta";
		break;
		
	case 6:
		$dia =  "sabado";
		break;
	
	default:
		$dia =  "valor invalido";
}

echo $dia;