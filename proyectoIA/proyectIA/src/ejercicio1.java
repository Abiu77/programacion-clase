import java.util.Scanner;

public class ejercicio1 {
    public static void main(String[]args){
        int mes;
        String estacion;
        Scanner teclado = new Scanner(System.in);
        System.out.println("Ingrese un numero: ");
        mes = teclado.nextInt();

        switch(mes){
            case 1:
            case 2:
                estacion = "verano";
                break;
            case 3:
            case 4:
            case 5:
                estacion = "primavera";
                break;
            case 6:
            case 7:
            case 8:
                estacion= "invierno";
                break;
            default:
                estacion = "otoño";
        }
        System.out.println("LA ESTACION CORRESPONDE A : " + estacion);
        teclado.close();
    }
}
