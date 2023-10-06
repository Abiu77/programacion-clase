public class ejercicio10 {
    public static void main(String[] args) {
        int mensualidades = 20; // Número total de mensualidades
        double pagoMensual = 10.0; // Primer pago mensual
        double totalPagado = 0.0; // Inicializar el total pagado

        for (int i = 1; i <= mensualidades; i++) {
            totalPagado += pagoMensual; // Agregar el pago mensual al total
            System.out.println("Cuota " + i + ": Paga " + pagoMensual + " s/. Total pagado hasta el momento: " + totalPagado + " s/.");

            // Duplicar el pago mensual para el próximo mes
            pagoMensual *= 2;
        }

        System.out.println("Total pagado después de " + mensualidades + " meses: " + totalPagado + " s/.");
    }
}