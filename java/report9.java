// Writing multithreaded programs using Thread and Runnable 
public class report9 {

    static class MyThread extends Thread {
        public void run() {
            System.out.println("Thread is running");
        }
    }

    public static void main(String[] args) {
        MyThread t1 = new MyThread();
        t1.start();
    }
}
