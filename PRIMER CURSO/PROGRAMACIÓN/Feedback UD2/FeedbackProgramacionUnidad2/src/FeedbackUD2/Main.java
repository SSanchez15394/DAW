package FeedbackUD2;
/* Iba a realizar el feedback pidiendo al usuario que interactuase y escribiese por teclado. Pero viendo que no lo pide el ejercici
 * y escuchando las últimas clases y tutorias me queda más claro que lo importante de esta práctica es demostrar que sabemos crear
 * e importar las CLASES en un programa.
 */
public class Main {
	
	private static int variacion;

	public static void main(String[] args) {
		
	    Poblacion pob1 = new Poblacion();
	    Poblacion pob2 = new Poblacion();
	    
	    pob1.comunidadAutonoma="Madrid";
	    pob1.provincia="Madrid";
	    pob1.gentilicio="Madrileños";
	    pob1.padron.setAnio(2021);
	    pob1.padron.numHab=6736407;
	    pob1.padron.variacion=0.031;
	    	
	    
		// Mostraremos los datos por pantalla.
	    pob1.Escribir();

		// Pondremos los datos de otra CCAA.
		pob2.comunidadAutonoma="Región de Murcia";
		pob2.provincia="Murcia";
		pob2.gentilicio="Murciano";
		pob2.padron.setAnio(2021);
	    pob2.padron.numHab=460851 ;
	    pob2.padron.variacion=0.032;
		    	
		    
		/* Mostraremos los datos de la nueva CCAA también por pantalla
		 * mediante el método ya construido y utilizado anteriormente.
		 */
	    pob2.Escribir();
	}
}	

		  
			
			
			



