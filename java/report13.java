// Writing GUI programs using swing components, event handling, and layout management 

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JTextField;

public class report13 {
    public static void main(String[] args) {
        JFrame f = new JFrame("Simple Calcultor");
        f.setLocation(300, 100);
        f.setSize(900, 700);
        f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        JPanel panel = new JPanel();
        panel.setLayout(null);

        JLabel lbl1 = new JLabel("First Number:");
        lbl1.setBounds(20, 20, 100, 20);
        panel.add(lbl1);

        JTextField numOne = new JTextField();
        numOne.setBounds(120, 20, 100, 20);
        panel.add(numOne);

        JLabel lbl2 = new JLabel("Second Number:");
        lbl2.setBounds(20, 50, 100, 20);
        panel.add(lbl2);

        JTextField numTwo = new JTextField();
        numTwo.setBounds(120, 50, 100, 20);
        panel.add(numTwo);

        JLabel lbl3 = new JLabel("Result:");
        lbl3.setBounds(20, 80, 100, 20);
        panel.add(lbl3);

        JTextField result = new JTextField();
        result.setBounds(120, 80, 100, 20);
        panel.add(result);

        JButton btn4Sum = new JButton("Sum");
        btn4Sum.setBounds(10, 120, 100, 20);
        panel.add(btn4Sum);

        btn4Sum.addActionListener(e -> {
            int a = Integer.parseInt(numOne.getText());
            int b = Integer.parseInt(numTwo.getText());
            int sum = a + b;

            result.setText("" + sum);
            JOptionPane.showMessageDialog(null, "sum Calculated");

        });

        f.add(panel);
        f.setVisible(true);
    }
}
