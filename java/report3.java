// Writing programs that include all control statements
import java.util.*;

public class report3 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int num = 5;

        if (num > 0) {
            System.out.println("Number is positive");
        }

        else {
            System.out.println("Number is Negative or zero");
        }

        int day = 1;
        switch (day) {
            case 1:
                System.out.println("Sunday");
                break;
            case 2:
                System.out.println("Monday");
                break;
            default:
                System.out.println("Invalid day");
        }

        System.out.println("For loop:");
        for (int i = 1; i <= 5; i++) {
            if (i == 3) {
                continue;
            }
            System.out.println(i);
        }

        System.out.println("While loop:");
        int i = 1;
        while (i <= 5) {
            System.out.println(i);
            i++;
        }

        System.out.println("Break example:");
        for (int k = 1; k <= 10; k++) {
            if (k == 5) {
                break;
            }
            System.out.println(k);
        }

        System.out.println("Program finished");
        return;
    }
}
