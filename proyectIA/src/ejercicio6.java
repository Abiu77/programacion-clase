import java.util.Scanner;

public class ejercicio6 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double numero;
        double suma = 0;
        int cantidad = 0;

        System.out.println("Ingrese números positivos (ingrese un número negativo para terminar):");

        while (true) {
            System.out.print("Ingrese un número: ");
            numero = scanner.nextDouble();

            if (numero < 0) {
                break;  //Salir del bucle si se ingresa un número negativo
            }

            if (numero >= 0) {
                suma += numero;
                cantidad++;
            }
        }

        if (cantidad > 0) {
            double promedio = suma / cantidad;
            System.out.println("El promedio de los números positivos ingresados es: " + promedio);
        } else {
            System.out.println("No se ingresaron números positivos.");
        }
    }
}