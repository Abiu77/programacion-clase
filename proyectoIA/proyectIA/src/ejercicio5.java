import java.util.Scanner;

public class ejercicio5 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int sumaPares = 0;
        int sumaImpares = 0;
    
        for (int i = 1; i <= 35; i++) {
            if (i % 2 == 0) {
                // Si es par, sumarlo a sumaPares
                sumaPares += i;
            } else {
                // Si es impar, sumarlo a sumaImpares
                sumaImpares += i;
            }
        }
    
        System.out.println("Suma de números pares: " + sumaPares);
        System.out.println("Suma de números impares: " + sumaImpares);
    
        sc.close();
        }
}
