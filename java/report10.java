// Writing programs with console and file input/output 
import java.io.*;

public class report10 {
    public static void main(String[] args) throws IOException {
        FileWriter fw = new FileWriter("data.txt");
        fw.write("Hello Java File I/O");
        fw.close();

        System.out.println("Data written to file");
    }
}