package EjercicioFeedbackUD3;

import java.util.Scanner;

public class EjercicioFeedbackUD3 {

				static Scanner teclado = new Scanner (System.in);
				
				public static void main (String [] args) {
					
			    // Creamos una variable tipo String para las letras y otra int para los números
				char [] Letras = {'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'};
				int [] Numeros = {65,66,67,68,69,70,71,71,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90};
				{

				// Pedimos por pantalla que escriban una letra
				System.out.println("Introduce una letra en MAYÚSCULAS: ");
				
				// Creamos una variable de la letra que va a almacenar los datos ingresados anteriormente
				char posicion = teclado.nextLine().charAt(0);
				
				/*Creamos un bucle que recorra nuestro Array y le pondremos una condición en la que si la letra introducida por teclado
				 * es igual a alguna letra de nuestro Array Letras, entonces pare y saque del Array Numeros el valor en misma posición
				 * del Array Letras */
				for (int palabra=0; palabra<Letras.length; palabra++) {
									
	                if(Letras[palabra] == posicion) {
	                   int numero = Numeros[palabra];
	                   
	                   // Imprimimos por pantalla le letra con su correspondiente código ASCII
	                   System.out.println("El caracter: " + posicion + " → Tiene el código ASCII: " + numero);
	                }

				}
			}
		}
	}
