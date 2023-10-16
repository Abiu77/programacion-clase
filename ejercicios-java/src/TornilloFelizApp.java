import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TornilloFelizApp {

    public static void main(String[] args) {
        JFrame frame = new JFrame("Tornillo Feliz");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(400, 200);

        JPanel panel = new JPanel();
        panel.setLayout(new GridLayout(4, 1));

        JLabel welcomeLabel = new JLabel("¡Bienvenido a Tornillo Feliz!");

        JButton comprarButton = new JButton("1. Comprar Producto");
        JButton buscarButton = new JButton("2. Buscar Producto");
        JButton iniciarUsuarioButton = new JButton("3. Iniciar Usuario");
        JButton registrarUsuarioButton = new JButton("4. Registrar Usuario");

        comprarButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Lógica para la opción 1: Comprar Producto
                // Puedes abrir una nueva ventana o realizar acciones específicas aquí.
            }
        });

        buscarButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Lógica para la opción 2: Buscar Producto
                // Puedes abrir una nueva ventana para seleccionar producto.
            }
        });

        iniciarUsuarioButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Lógica para la opción 3: Iniciar Usuario
                // Puedes abrir una nueva ventana para ingresar usuario y contraseña.
            }
        });

        registrarUsuarioButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Lógica para la opción 4: Registrar Usuario
                // Puedes abrir una nueva ventana para ingresar datos de usuario.
            }
        });

        panel.add(welcomeLabel);
        panel.add(comprarButton);
        panel.add(buscarButton);
        panel.add(iniciarUsuarioButton);
        panel.add(registrarUsuarioButton);

        frame.add(panel);
        frame.setVisible(true);
    }
}