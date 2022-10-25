
package FeedbackUD5;

import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import com.sun.jdi.connect.spi.Connection;
import java.util.Scanner;

public class feedbackud5 {

    public static void main(String[] args) {
        
        /* Al tener un MAC con M1 no he podido verificar si está correcta la práctica
        y he intentado al menos hacer una estructura de lo que sería aún que sé
        de sobra que está incompleto. Lo siento pero no he podido hacer más...
        */
        
        Connection conexion = null;
        try{
            String cadenaConexion ="jdbc:mysql://localhost:3306/feedback5";
            conexion = (Connection) DriverManager.getConnection(cadenaConexion, "user-fb5", "F33dback5");
            System.out.println("Conexión correcta");  
                        
            Scanner teclado = new Scanner (System.in);
            System.out.println("Introduce el tipo de motor o el año de lanzamiento del coche: ");
            
            Statement sent = conexion.createStatement();
            ResultSet rs = sent.executeQuery("SELECT * FROM feedback5;");
            
            String tipo_motor = rs.getString("tipo_motor");
            String anio_lanzamiento = rs.getString("anio_lanzamiento");  
            
            while(rs.next()){
                System.out.print(rs.getInt("marca")+" - ");
                System.out.print(rs.getString("modelo")+" - ");
                System.out.print(rs.getString("tipo_motor")+" - ");
                System.out.print(rs.getString("anio_lanzamiento"));
                System.out.println("");
            }
            
        }catch (SQLException e){
            System.out.println(e.getMessage());
        }   
    }
}