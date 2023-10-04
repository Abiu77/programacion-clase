import java.util.Scanner;

public class SistemaVentaFerreteria {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        while (true) {
            System.out.println("¡Bienvenido a Tornillo Feliz - Ferretería en línea!");

            // Paso 1: Iniciar sesión
            boolean loggedIn = false;
            while (!loggedIn) {
                System.out.print("Por favor, ingresa tu nombre de usuario (o 'salir' para salir): ");
                String username = scanner.nextLine();

                if (username.equalsIgnoreCase("salir")) {
                    System.out.println("¡Gracias por visitarnos! Hasta luego.");
                    return;
                }

                System.out.print("Por favor, ingresa tu contraseña: ");
                String password = scanner.nextLine();

                // Simulamos credenciales de inicio de sesión
                if (validarCredenciales(username, password)) {
                    System.out.println("Inicio de sesión exitoso. ¡Bienvenido, " + username + "!");
                    loggedIn = true;
                } else {
                    System.out.println("Credenciales incorrectas. Por favor, intenta de nuevo.");
                }
            }

            // Mostrar opciones del cliente
            while (loggedIn) {
                System.out.println("Opciones disponibles:");
                System.out.println("1. Comprar producto");
                System.out.println("2. Buscar producto");
                System.out.println("3. Registrar usuario");
                System.out.println("4. Salir");

                int opcion = scanner.nextInt();
                scanner.nextLine(); 
                switch (opcion) {
                    case 1:
                        comprarProductos(scanner);
                        break;

                    case 2:
                        // Implementar la búsqueda de productos
                        System.out.println("Opción 'Buscar producto' no implementada aún.");
                        break;

                    case 3:
                        // Implementar el registro de usuario
                        System.out.println("Opción 'Registrar usuario' no implementada aún.");
                        break;

                    case 4:
                        System.out.println("¡Gracias por visitarnos! Hasta luego.");
                        loggedIn = false;
                        break;

                    default:
                        System.out.println("Opción no válida. Por favor, intenta de nuevo.");
                        break;
                }
            }
        }
    }

    private static boolean validarCredenciales(String username, String password) {
        // Simulamos credenciales de inicio de sesión (reemplaza con tus propias validaciones)
        return username.equals("admin") && password.equals("admin");
    }

    private static void comprarProductos(Scanner scanner) {
        System.out.println("Productos disponibles:");

        // Simulamos productos disponibles
        String[] productos = {
            "1. Martillo ($10.00)",
            "2. Destornillador ($5.00)",
            "3. Ladrillos ($20.00 por paquete)",
            "4. Cemento ($15.00 por bolsa)",
            "5. Pintura blanca ($8.00 por litro)",
            "6. Pintura de colores ($10.00 por litro)",
            "7. Tornillos ($1.00 por unidad)"
        };

        for (String producto : productos) {
            System.out.println(producto);
        }

        // Variables para llevar un registro de productos y costos
        int totalProductos = 0;
        double costoTotal = 0.0;

        while (true) {
            System.out.print("Elige un producto (1-7) o '0' para finalizar la compra: ");
            int productoElegido = scanner.nextInt();
            scanner.nextLine(); // Limpiar el salto de línea

            if (productoElegido == 0) {
                break;
            }

            if (productoElegido < 1 || productoElegido > 7) {
                System.out.println("Producto no válido. Por favor, elige un número válido.");
                continue;
            }

            System.out.print("Cantidad deseada: ");
            int cantidad = scanner.nextInt();
            scanner.nextLine(); // Limpiar el salto de línea

            // Calcula el costo del producto y agrega al total
            double costoProducto = calcularCostoProducto(productoElegido, cantidad);
            costoTotal += costoProducto;
            totalProductos += cantidad;

            System.out.println("Producto agregado al carrito: " + productos[productoElegido - 1] + " x " + cantidad);
        }

        // Mostrar costo total y opciones de pago
        System.out.println("Costo total de la compra: $" + costoTotal);

        System.out.print("¿Deseas continuar con el pago (S/N)? ");
        String continuarPago = scanner.nextLine();

        if (continuarPago.equalsIgnoreCase("S")) {
            // Proceso de pago (simulado)
            System.out.print("Ingresa el número de tarjeta de crédito: ");
            String numeroTarjeta = scanner.nextLine();
            System.out.print("Ingresa la fecha de vencimiento (MM/YY): ");
            String fechaVencimiento = scanner.nextLine();
            System.out.print("Ingresa el código de seguridad (CVV): ");
            String cvv = scanner.nextLine();

            // Simulamos el proceso de pago
            System.out.println("Procesando el pago...");
            System.out.println("¡Pago exitoso! Gracias por tu compra.");
        }
    }

    private static double calcularCostoProducto(int productoElegido, int cantidad) {
        // Simulamos los costos de los productos (reemplaza con tus propios precios)
        double[] precios = {10.00, 5.00, 20.00, 15.00, 8.00, 10.00, 1.00};
        return precios[productoElegido - 1] * cantidad;
    }
}
