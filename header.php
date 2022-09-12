<?php


        include "connection.php"; 
        $newidnum = $_SESSION['idnum'];   
        $tsql =     "SELECT * FROM users   WHERE idnum = '$newidnum'";  
          $result = sqlsrv_query($conn, $tsql, array(), array ("Scrollable" => SQLSRV_CURSOR_KEYSET));   
            while($row=sqlsrv_fetch_array($result))    {  
                   $newidnum = $row['idnum']; 
                          $newfname = $row['fname']; 
                          $newlname = $row['lname']; 
                          $newphone = $row['phone']; 
                          $newage = $row['age'];
                          $newemail = $row['email']; 
                          $newcity = $row['city'];   
                          
                             }   
                            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
</head>
<body>



<div class="main" >
        <nav>
            
            <div class="logo">
                <img src="Picture3.png" > 
            </div>
            
            <div class="nav-links" >
                <ul>
                
                    <li><a href="contact2.html" >צור קשר </a></li>
                    <li><a href="patientadver2.php" >רשימת חולים</a></li>
                    <li><a href="hospital2.html" >מעבדות בנק הדם</a></li>
                    <li><a href="home2.html" >דף בית </a></li>
                </ul> 
            </div>
        
            <div class="user-name">
              
              <?php 
	
                  echo $newfname;  echo " ,שלום"."<br>\n";
                        
                  echo $newidnum;  echo " ,ת''ז"."<br>\n";
                 
                ?>
                <br>


             </div> 
           
            
         
            </div>
            
        </nav>
        
      =
        <div class="a1" > 
                 
        <a href="signin.html" name="signout" >התנתק </a></a>
                            </div>
                       
                            
        <hr width="70%" > 


    </div>

</body>
</html>

