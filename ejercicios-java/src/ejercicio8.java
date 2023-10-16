import java.util.Scanner;

public class ejercicio8 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Ingrese tres números:");
        System.out.print("Número 1: ");
        double num1 = scanner.nextDouble();
        System.out.print("Número 2: ");
        double num2 = scanner.nextDouble();
        System.out.print("Número 3: ");
        double num3 = scanner.nextDouble();

        // Realizar el ordenamiento
        if (num1 > num2) {
            // Intercambiar num1 y num2
            double temp = num1;
            num1 = num2;
            num2 = temp;
        }

        if (num2 > num3) {
            // Intercambiar num2 y num3
            double temp = num2;
            num2 = num3;
            num3 = temp;
        }

        if (num1 > num2) {
            // Intercambiar num1 y num2 nuevamente
            double temp = num1;
            num1 = num2;
            num2 = temp;
        }

        System.out.println("Números ordenados en forma ascendente: " + num1 + ", " + num2 + ", " + num3);
    }
}