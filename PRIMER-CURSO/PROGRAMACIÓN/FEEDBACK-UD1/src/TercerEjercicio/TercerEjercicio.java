package TercerEjercicio;

import java.util.Scanner;

public class TercerEjercicio {

	public static void main (String[] args) {
		
        double a = 0; 
        double b = 1;

        Scanner teclado = new Scanner(System.in);
        System.out.println("Ingresa el número con el que deseas hallar el factorial:");

        a = teclado.nextInt();

        // Añadimos esta variable para escribir por pantalla
        double c = a;

        
        while (a != 0) {
        	b *= a; // "=" asigna la multiplicacíon de 2 variables.
            a --; // "--" decrementa el valor.
        }

        System.out.println("El valor del factorial " + c + " es " + b );
        
        teclado.close();
    }
}