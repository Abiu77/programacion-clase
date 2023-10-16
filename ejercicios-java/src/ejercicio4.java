import java.util.Scanner;

public class ejercicio4 {
    public static void main(String[] args){
        int c, x, y, resultado;
        Scanner teclado = new Scanner(System.in);
        //while()
        System.out.println("Ingrese el 1er numero: ");
        x = teclado.nextInt();
        System.out.println("Ingrese el 2do numero: ");
        y = teclado.nextInt();
        System.out.println("Que quieres realizar: \n1.-Suma; \n2.-Resta; \n3.-Multiplicaion; \n4.-Divicion");
        c = teclado.nextInt();
        switch (c) { 
            case 1:
                c = (x + y);
                break;
            case 2:
                c = (x - y);
                break;
            case 3:
                c = (x * y);
                break;
            case 4:
                c = (x / y);
                break;
            default:
                break;
        }
        System.out.println("El resultado de lo que eligio es: "+ c);
        teclado.close();
    }
}
