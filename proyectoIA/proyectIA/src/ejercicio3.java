import java.util.Scanner;

public class ejercicio3 {
    public static void main(String[] args){
        int i;
        int suma=0;
        Scanner teclado = new Scanner(System.in);
        while(true){
            System.out.println("Ingrese numero: ");
            i = teclado.nextInt();
            if(i<0){
                break;
            }
            suma += i;
        }
        System.out.println("La suma de los numeros ingresados es : "+ suma);
        teclado.close();
    }
}
