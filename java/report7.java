// Writing programs with exception handling 
public class report7 {
    public static void main(String[] args) {
        try {
            int a = 10;
            int b = 0;

            int result = a / b;
            System.out.println("Result = " + result);

        } catch (ArithmeticException e) {
            System.out.println("Cannot divide by zero");
        }

    }

}
