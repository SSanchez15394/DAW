package FeedbackUD2;

public class Poblacion {
	
	// Atributos:
	String comunidadAutonoma;
	String provincia;
	String gentilicio;
	Padron padron;
	
	// Constructores:
	public Poblacion() {
		comunidadAutonoma="";
		provincia="";
		gentilicio="";
		padron = new Padron();
	}
	
	// Métodos:
	public void Escribir() {
	    /* Escribiremos \n al principio del primer print para separar los datos mostrados 
	     * de una CCAA y otra para que no estén mezclados. */
		System.out.println("\nComunidad Autonóma: " + this.comunidadAutonoma);
		System.out.println("Provincia:          " + this.provincia);
		System.out.println("Gentilicio:         " + this.gentilicio);
		System.out.println("Padrón      ->      Año: " + this.padron.getAnio());
		if (this.padron.setAnio(2021)) System.out.println("                    AÑO VÁLIDO.");
		else System.out.println("                    AÑO NO VÁLIDO.");
		System.out.println("Nº de Habitantes:   " + this.padron.numHab);
		System.out.println("Variación:          " + this.padron.variacion);
	}

}
