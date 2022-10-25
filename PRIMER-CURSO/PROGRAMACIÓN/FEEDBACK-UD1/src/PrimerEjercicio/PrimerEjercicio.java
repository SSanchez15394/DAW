package PrimerEjercicio;

import java.util.Scanner;

public class PrimerEjercicio {

	public static void main(String[] args) {
		
		float precioArt=300f, descuento= 0.2f, precioConDescuento, dineroCliente, cambio, falta; 
		
		System.out.println("Precio Articulo: ");
		System.out.println(precioArt);
		
		// Calculamos los € de descuento que se nos restarán al precio inicial.
		System.out.println("Descuento del 20%: ");
		System.out.println(precioArt*descuento);
		
		// Calculamos el precio del artículo con el descuento ya aplicado.
		precioConDescuento=precioArt-(precioArt*descuento);
		System.out.println("Precio con Descuento: ");
		System.out.println(precioConDescuento);
		
		System.out.println("Dinero que lleva el cliente: ");
		
		// Habilitamos el teclado para poder introducir la cantidad de dinero la cual dispone el cliente.
		Scanner teclado = new Scanner(System.in);
		dineroCliente = teclado.nextInt();
		
		// Creamos una condición if y dos else if para determinar si se debe o no dar cambio al cliente.	
		cambio=dineroCliente-precioConDescuento;
		falta=precioConDescuento-dineroCliente;
		
		if (cambio<0) {
			System.out.println("Falta dinero. Se tienen que abonar todavía: ");
			System.out.println(falta);
		}
		else if  (cambio==0) {
			System.out.println("No es necesario dar cambio.");
		}
		else if (cambio>0) {
			System.out.println("El cambio a devolver es: ");
			System.out.println(cambio);
			
		}

	}

}
