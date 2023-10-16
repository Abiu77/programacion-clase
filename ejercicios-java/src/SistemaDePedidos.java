import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;

public class SistemaDePedidos {

    private static ArrayList<String> pedidos = new ArrayList<>();

    public static void main(String[] args) {
        JFrame frame = new JFrame("Sistema de Pedidos");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(400, 200);

        JPanel panel = new JPanel();
        panel.setLayout(new GridLayout(3, 2));

        JLabel labelCliente = new JLabel("Cliente:");
        JTextField clienteField = new JTextField();

        JLabel labelPedido = new JLabel("Pedido:");
        JTextField pedidoField = new JTextField();

        JButton registrarButton = new JButton("Registrar Pedido");

        registrarButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String cliente = clienteField.getText();
                String pedido = pedidoField.getText();
                pedidos.add("Cliente: " + cliente + ", Pedido: " + pedido);
                clienteField.setText("");
                pedidoField.setText("");
                JOptionPane.showMessageDialog(frame, "Pedido registrado con éxito.");
            }
        });

        panel.add(labelCliente);
        panel.add(clienteField);
        panel.add(labelPedido);
        panel.add(pedidoField);
        panel.add(new JLabel());
        panel.add(registrarButton);

        frame.add(panel);
        frame.setVisible(true);
    }
}