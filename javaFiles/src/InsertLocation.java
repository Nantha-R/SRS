import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.Scanner;

/**
 * Created by Nanthakumar on 10-12-2017.
 */
public class InsertLocation {
    public static void main(String[] args)
    {
        Scanner s=new Scanner(System.in);
        try
        {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost/srs","root","");
            Statement stmt=con.createStatement();
            for(int i=0;i<32;i++)
            {
                String name=s.nextLine();
                int latitude=s.nextInt();
                int longitude=s.nextInt();
                s.nextLine();
                String query="insert into districts values('"+name+"',"+latitude+","+longitude+")";
                stmt.executeUpdate(query);
            }
            con.close();
        }
        catch(Exception e){ System.out.println(e);}




    }
}

