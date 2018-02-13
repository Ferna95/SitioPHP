<?php

	function getWeekDay($num){
		switch($num){
			case 1:{
				return "Lunes";
				break;
			}
			case 2:{
				return "Martes";
				break;
			}
			case 3:{
				return "Miércoles";
				break;
			}
			case 4:{
				return "Jueves";
				break;
			}
			case 5:{
				return "Viernes";
				break;
			}
			case 6:{
				return "Sábado";
				break;
			}
			case 7:{
				return "Domingo";
				break;
			}
			default:{
				return "";
				break;
			}
		}
	}

	function getNumOfDay($day){
		switch($num){
			case "Lunes":{
				return 1;
				break;
			}
			case "Martes":{
				return 2;
				break;
			}
			case "Miércoles":{
				return 3;
				break;
			}
			case "Jueves":{
				return 4;
				break;
			}
			case "Viernes":{
				return 5;
				break;
			}
			case "Sábado":{
				return 6;
				break;
			}
			case "Domingo":{
				return 7;
				break;
			}
			default:{
				return 0;
				break;
			}
		}
	}

	function getCheck($chk){
		if($chk == "on"){
			return 1;
		}
		else{
			return 0;
		}
	}
?>