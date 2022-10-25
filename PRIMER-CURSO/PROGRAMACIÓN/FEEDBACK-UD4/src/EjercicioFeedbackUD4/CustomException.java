package EjercicioFeedbackUD4;

// Creamos una clase personalizada que extienda de Exception.
public class CustomException extends Exception {
	
	public static final long serialVersionUID = 700L;
	
	public CustomException(String mensaje) {
		super(mensaje);
		}
		
	}
