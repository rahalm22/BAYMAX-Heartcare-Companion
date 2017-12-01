/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package baymax_ml_part;

import java.sql.*;  

class mysqlTest
{  
    public static void main(String args[])
    {  
        try
        {  
            Class.forName("com.mysql.jdbc.Driver");  
            Connection con=DriverManager.getConnection(  
            "jdbc:mysql://localhost:3306/e14390lab04","root","");  
            //here sonoo is database name, root is username and password  
            Statement stmt=con.createStatement();  
            ResultSet rs=stmt.executeQuery("select * from movie");  
            while(rs.next())  
            System.out.println(rs.getInt(1)+"  "+rs.getString(2));  
            con.close();  
        }catch(Exception e){ System.out.println(e);}  
    }  
} 