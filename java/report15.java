import java.sql.*;

class report15 {
    public static void main(String[] args) throws Exception {
        String url = "jdbc:mysql://localhost:3306/test"; 
        String username = "root"; 
        String password = "";
        String query = "select * from students"; 

        Class.forName("com.mysql.cj.jdbc.Driver");

        Connection con = DriverManager.getConnection(url, username, password);
        System.out.println("Connection Established successfully");

        Statement st = con.createStatement();

        ResultSet rs = st.executeQuery(query);

        while (rs.next()) {
            String id = rs.getString("id");
            String name = rs.getString("name");

            System.out.println(id);
            System.out.println(name);
        }

        st.close();
        con.close();
        System.out.println("Connection Closed....");
    }
}