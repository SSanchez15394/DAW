package FeedbackUD2;

public class Padron {
	
	// Atributos:
	private int anio;
	int numHab;
	double variacion;
	
	// Constructores:
	public Padron() {
		anio=0;
		numHab=0;	
		variacion=0.0;
	}
	
	// Getters y Setters:
	public boolean setAnio(int an) {
		// Si el año es correcto nos devolverá True.
		// En otro caso nos devolverá False.
		
		if (an>1900 && an<2023) {
			this.anio=an;
			return (true);
		}
		else return (false);
		}
	public int getAnio(){
		return (this.anio);	
	}
}		