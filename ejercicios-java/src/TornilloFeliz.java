import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TornilloFeliz {

    private static String username = "admin";
    private static String password = "admin";

    public static void main(String[] args) {
        JFrame frame = new JFrame("Tornillo Feliz");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(400, 200);

        JPanel panel = new JPanel();
        panel.setLayout(new GridLayout(4, 1));

        JLabel welcomeLabel = new JLabel("¡Bienvenido a Tornillo Feliz!");
        JLabel loginLabel = new JLabel("Ingresa tus credenciales:");

        JTextField usernameField = new JTextField();
        JPasswordField passwordField = new JPasswordField();

        JButton loginButton = new JButton("Iniciar Sesión");

        loginButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String enteredUsername = usernameField.getText();
                String enteredPassword = new String(passwordField.getPassword());

                if (enteredUsername.equals(username) && enteredPassword.equals(password)) {
                    // Credenciales válidas, mostrar el menú principal
                    showMainMenu();
                } else {
                    JOptionPane.showMessageDialog(frame, "Credenciales incorrectas. Por favor, intenta de nuevo.");
                }
            }
        });

        panel.add(welcomeLabel);
        panel.add(loginLabel);
        panel.add(usernameField);
        panel.add(passwordField);
        panel.add(loginButton);

        frame.add(panel);
        frame.setVisible(true);
    }

    private static void showMainMenu() {
        JFrame mainFrame = new JFrame("Tornillo Feliz - Menú Principal");
        mainFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        mainFrame.setSize(400, 200);

        JPanel mainPanel = new JPanel();
        mainPanel.setLayout(new GridLayout(3, 1));

        JLabel welcomeLabel = new JLabel("¡Bienvenido de nuevo!");
        JLabel optionsLabel = new JLabel("Selecciona una opción:");

        JButton buyButton = new JButton("1. Comprar Producto");
        JButton searchButton = new JButton("2. Buscar Producto");
        JButton registerButton = new JButton("3. Registrar Usuario");

        buyButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Lógica para la opción 1: Comprar Producto
                // Aquí puedes mostrar una lista de productos disponibles y permitir al cliente seleccionar productos para comprar.
                // Una vez que el cliente ha seleccionado productos, puedes mostrar la opción de pagar con tarjeta.
            }
        });

        // Agregar lógica para las opciones 2 y 3 aquí.

        mainPanel.add(welcomeLabel);
        mainPanel.add(optionsLabel);
        mainPanel.add(buyButton);
        mainPanel.add(searchButton);
        mainPanel.add(registerButton);

        mainFrame.add(mainPanel);
        mainFrame.setVisible(true);
    }
}
