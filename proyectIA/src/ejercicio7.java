import java.util.Scanner;

public class ejercicio7 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        int num1, num2, num3;
        int temp;

        System.out.println("Ingrese tres números:");
        System.out.print("Número 1: ");
        num1 = teclado.nextInt();
        System.out.print("Número 2: ");
        num2 = teclado.nextInt();
        System.out.print("Número 3: ");
        num3 = teclado.nextInt();

        teclado.close();

          if (num1 > num2) {
            temp = num1;
            num1 = num2;
            num2 = temp;
        }

        if (num2 > num3) {
            temp = num2;
            num2 = num3;
            num3 = temp;
        }

        if (num1 > num2) {
            temp = num1;
            num1 = num2;
            num2 = temp;
        }

        System.out.println("Números ordenados en forma ascendente: " + num1 + ", " + num2 + ", " + num3);
    }
}