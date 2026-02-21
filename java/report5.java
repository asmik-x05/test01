// Writing programs with classes and inheritance 
class Person {
    void show() {
        System.out.println("This is a Person");
    }
}

class Student extends Person {
    void display() {
        System.out.println("This is a Student");
    }
}

public class report5 {
    public static void main(String[] args) {

        Student s = new Student();

        s.show();
        s.display();
    }
}
