import java.util.Scanner;

public class report11ii {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter a string: ");
        String s = sc.nextLine();

        System.out.println("Length: " + s.length());
        System.out.println(s.toUpperCase());

        sc.close();
    }
}
