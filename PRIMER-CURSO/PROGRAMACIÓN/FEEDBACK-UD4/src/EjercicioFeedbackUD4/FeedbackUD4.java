package EjercicioFeedbackUD4;

import java.util.Scanner;
import java.util.InputMismatchException;

public class FeedbackUD4 {

	public static void main(String[] args) {
		
		/* Bloque Try-Catch en donde introducimos el método creado y si salta alguna excepción 
		 * ya sea personalizada o InputMismatchException lo muestre al usuario por pantalla.*/
		try {
		introducirTelefono();
		}
		catch (CustomException e) {
			System.out.println(e.getMessage());
		}
		catch (InputMismatchException e) {
			System.out.println("Por favor escriba solo números.");		
		}
	}
	
	// Mediante el throws llamamos a la clase CustomException 
	public static void introducirTelefono() throws CustomException{
		
		long telefono=0;
		
		// Pedimos al usuario que escriba su nº de teléfono.
		System.out.println("Introduce tú número de móvil o teléfono fijo:");
		
		Scanner teclado = new Scanner(System.in);
		telefono = teclado.nextLong();
		teclado.close();

		/* Creamos un if indicando en que casos queremos que salte nuestra excepción personalizada 
		* y en caso contrario le diremos al usuario que el nº introducido es válido.*/ 
		if (telefono < 600000000 || telefono > 799999999 && telefono < 900000000 || telefono > 999999999)
			throw new CustomException("Número de teléfono no válido. Vuelva a intentarlo.");
		else 
			System.out.println("El número de teléfono introducido es válido.");
		}

	}