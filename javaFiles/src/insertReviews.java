import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.Random;
import java.util.Scanner;

/**
 * Created by Nanthakumar on 17-12-2017.
 */
public class insertReviews {
    public static void main(String[] args)
    {
        Random r=new Random();
        String fbid[]={"Koushik","Praveen Kumar","Pradeep","Wajid","Jacob Joshua","Ashok Kumar"};
        String collegeName[]={"sjce","sathyabama","jeppiar"};
        String reviews[]={"Good","Bad","Average","Great"};
        int latitude[]={11,13,11,11,12};
        int longitude[]={79,80,76,79,78};
        String attribute[]={"Transport","Studies","Sports","Discipline","Food"};
        //good-0.44 bad--0.54 average 0 great 0.62
        double factor=0;
        int goodorbad=0;
        String district[]={"Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri"};
        try
        {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost/srs","root","");
            Statement stmt=con.createStatement();
            for(int i=0;i<100;i++)
            {
                int rno=r.nextInt(5);
                int r1no=r.nextInt(2);
                int r2no=r.nextInt(3);
                switch(r2no)
                {
                    case 0:
                        factor=0.44;
                        break;
                    case 1:
                        factor=-0.54;
                        goodorbad=1;
                        break;
                    case 2:
                        factor=0;
                        break;
                    case 3:
                        factor=0.62;
                        break;
                    default:
                        break;
                }
                String query="insert into reviews values('"+fbid[rno]+"','"+collegeName[r1no]+"','"+reviews[r2no]+"',"+latitude[i%5]+","+longitude[i%5]+",'"+attribute[rno]+"',"+factor+","+goodorbad+",'"+district[i%5]+"')";
                System.out.print(query);
                stmt.executeUpdate(query);
            }
            con.close();
        }
        catch(Exception e){ System.out.println(e);}

    }
}
