package SegundoEjercicio;

public class SegundoEjercicio{
	
	public static void main (String[] args){
		
		int i;
		// Iniciamos un bucle for para hallar todos los múltiplos de 5 hasta el número 30.
		for (i=0; i<=30; i++){
			if(i%5==0) {
				System.out.println(i + ": Es múltiplo de 5.");
			}
			else {
				System.out.println(i);
			}
		}
	}
}
	

