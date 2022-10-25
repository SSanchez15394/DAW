let month = prompt("Introduce un número del 1 al 12");

function returnResult(){
	document.write(`El mes que has elegido es ${month}`);
}
switch (month) {
	case "1":
		month = "Enero y tiene 31 días.";
		returnResult();
		break;

	case "2":
		month = "Febrero y tiene 28 días.";
		returnResult();
		break;

	case "3":
		month = "Marzo y tiene 31 días.";
		returnResult();
		break;

	case "4":
		month = "Abril y tiene 30 días.";
		returnResult();
		break;

	case "5":
		month = "Mayo y tiene 31 días.";
		returnResult();
		break;

	case "6":
		month = "Junio y tiene 30 días.";
		returnResult();
		break;

	case "7":
		month = "Julio y tiene 31 días.";
		returnResult();
		break;

	case "8":
		month = "Agosto y tiene 31 días.";
		returnResult();
		break;

	case "9":
		month = "Septiembre y tiene 30 días.";
		returnResult();
		break;

	case "10":
		month = "Octubre y tiene 31 días.";
		returnResult();
		break;

	case "11":
		month = "Noviembre y tiene 30 días.";
		returnResult();
		break;

	case "12":
		month = "Diciembre y tiene 31 días.";
		returnResult();
		break;

	default:
		document.write("¡¡¡ DEBES INTRODUCIR NÚMEROS DEL 1 AL 12 !!!");
}