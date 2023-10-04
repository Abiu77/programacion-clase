import java.util.Scanner;

public class ejercicio2 {
    public static void main(String[]args){
        int dia;
        String semana;
        Scanner teclado = new Scanner(System.in);
        System.out.println("Ingrese el numero de la semana: ");
        dia = teclado.nextInt();

        switch(dia){
            case 1:
                semana = "domingo";
                break;
            case 2:
                semana = "lunes";
                break;
            case 3:
                semana = "martes";
                break;
            case 4:
                semana = "miercoles";
                break;
            case 5:
                semana = "jueves";
                break;
            case 6:
                semana = "viernes";
                break;
            case 7:
                semana = "sabado";
                break;
            default:
                semana = "No es correcto lo que ingreso";
        }
        System.out.println("La semana es: "+ semana);
        teclado.close();
    }
}
