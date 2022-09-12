<script>


  function onlyNumberKey(evt) {

      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode

      // Check if the inserted charcter is a number in ASCII code
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
  }
  </script>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>דוח חולה</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="list.css">
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
                          <li><a href="hospital2.html" >בית חולים </a></li>
                          <li><a href="home2.html" >דף בית </a></li>
                      </ul>
                  </div> 
                  <div class="back" >
              <a href="userlayout.php" >איזור אישי </a></a>
              </div>
    
      </nav> 
    
      <div class="logout" >
          <a href="index.html" >יציאה </a></li></a>
          </div>
    
    
              <hr width="70%" > 
              <br>
    
    <br>
    <h2 class="middle-title">דוח החולים
                 </h2>
    <br></br>

              <table class="table table-dark table-striped" >
                
            <div class="container" >
           <form action="" method="POST">
            <input class="container1" type="submit" value="חפש" name="submit">
              <input class="container2" type="text" placeholder = "תחפש חולה לפי ת''ז" name="key" required pattern="[0-9]{9}" onkeypress="return onlyNumberKey(event)" maxlength="9">
            
          </form>
          </div>
          <br>
                <thead>
                  <tr class="tr1" >
                    
                    <th>דוא''ל</th>
                    <th>גיל</th>
                    <th>יישוב</th>
                    <th>טלפון</th>
                    <th>ת"ז</th>
                    <th>שם משפחה</th>
                    <th>שם פרטי </th>    
                   </tr>
                </thead>
                <tbody>
                <?php
                        

           

                        require 'connection.php';
                        if(isset($_POST['submit'])){ 
                               


                                $value = $_POST['key'];
                                $query = " SELECT * FROM users where idnum  ='$value' and usertype='patient' ";
                                $result = sqlsrv_query($conn, $query, array(), array ("Scrollable" => SQLSRV_CURSOR_KEYSET));   
                               

                                if(sqlsrv_num_rows($result)> 0){

                                    while($row = sqlsrv_fetch_array($result)){
                                    
                                        
                                     ?>  
                                     <tr style= "color: red; ">
                                    
                                    <td><?php echo $row['email'];?> </td>
                                    <td><?php echo $row['age'];?></td>
                                    <td><?php echo $row['city'];?></td>
                                    <td><?php echo  $row['phone'];?></td>
                                    <td><?php echo  $row['idnum'];?></td>
                                    <td><?php echo  $row['lname'];?></td>
                                    <td><?php echo  $row['fname'];?></td>
                                    

                                </tr>
                                <?php
                                    }
                                }
                            }

                  ?>
                  
                   <?php

               
                            require ('connection.php');
                            $query = sqlsrv_query($conn,"SELECT * FROM users where usertype='patient'");

                            while($row =sqlsrv_fetch_array($query)){

                                $newemail  =  $row['email'];
                                $newage    =  $row['age'];
                                $newcity = $row['city'];
                                $newphone  =$row['phone'];
                                $newidnum  = $row['idnum'];
                                $newlname  =   $row['lname'];
                                $newfname  =$row['fname'];
                        ?>
                    <tr>
                   
                      <td><?php echo $newemail; ?></td>
                      <td><?php echo $newage  ;?></td>
                      <td><?php echo $newcity ;?></td>
                      <td><?php echo  $newphone;?></td>
                      <td><?php echo  $newidnum;?></td>
                      <td><?php echo  $newlname;?></td>
                      <td><?php echo  $newfname;?></td>
                     
                    
                     

                  </tr>
                  
                        <?php } ?>
                                



                </tbody>
                <footer class="footer-copyright">
            <h5>
             Nb.Sg.Platelet Donation - זכויות יוצרים שמורות ל-&copy;
            </h5>
       </footer>          

</body>
</html>



