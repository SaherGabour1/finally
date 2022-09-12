<script>


  function onlyNumberKey(evt) {

      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode

      // Check if the inserted charcter is a number in ASCII code
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
  }

  function onlyLettersKey(evt) {

      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode

      // Check if the inserted charcter is a letter in ASCII code
      if ((ASCIICode > 64 && ASCIICode < 91) || (ASCIICode > 96 && ASCIICode < 123))
          return true;
      return false;
  }

</script>

<?php

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="patientadver.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


 
  <title>רשימת חולים</title>
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
              <li><a href="home2.html" >דף בית  </a></li>
            </ul>   
        </div> 
        
        <div class="back" >    
          <a href="userlayout.php" >איזור אישי </a></a>
          </div>


  </nav> 

  <div class="logout" >    
      <a href="index.html" >התנתק </a></li></a>
      </div>


    <hr width="70%" > 

    
        <br></br>

        <h2 class="middle-title">
            רשימת החולים 
          </h2>
          <br></br>

          <table class="table table-dark table-striped" style="border:1px solid black;">
          <div class="container3" >
           <form action="" method="POST">
            <input class="container1" type="submit" value="חפש" name="submit">
              <input class="container2" type="text" placeholder = "חפש חולה לפי שם/איזור באנגלית" name="key" onkeypress="return onlyLettersKey(event)" maxlength="15" >
          
          </form>
          </div>
          <br>
  
            <thead>
              <tr class="tr1" >
             
                <th>תיאור סיפור </th>
                <th>איזור תרימה  </th>
                <th>סוג דם </th>
                <th>טלפון </th>
                <th>גיל </th>
                <th>שם מלא </th>
                

               
              </tr>
            </thead>
            <tbody>
            <?php
                        

           

                        require 'connection.php';
                        if(isset($_POST['submit'])){ 
                               


                                $value = $_POST['key'];
                                $query = " SELECT * FROM patientadv where concat(donatearea,fname) Like  '%$value%' ";
                                $result = sqlsrv_query($conn, $query, array(), array ("Scrollable" => SQLSRV_CURSOR_KEYSET));   
                               

                                if(sqlsrv_num_rows($result)> 0){

                                    while($row = sqlsrv_fetch_array($result)){
                                    
                                        
                                     ?>  
                                     <tr style= "color: red; ">
                                    
                                    <td><?php echo $row['body'];?></td>
                                    <td><?php echo $row['donatearea'];?></td>
                                    <td><?php echo  $row['bloodtype'];?></td>
                                    <td><?php echo  $row['phone'];?></td>
                                    <td><?php echo  $row['age'];?></td>
                                    <td><?php echo  $row['fname'];?></td>
                                    

                                </tr>
                                <?php
                                    }
                                }
                            }

                  ?>
                  




                    <?php
                    require ('connection.php');
                    $query = sqlsrv_query($conn,"SELECT * FROM patientadv ");
                  
                    while($row =sqlsrv_fetch_array($query))

                 
                    {
                    
                    ?>
              
                    <tr>
                    
              
                      <td><?php echo $row['body'];?></td>
                      <td><?php echo $row['donatearea'];?></td>
                      <td><?php echo  $row['bloodtype'];?></td>
                      <td><?php echo  $row['phone'];?></td>
                      <td><?php echo  $row['age'];?></td>
                      <td><?php echo  $row['fname'];?></td>
                     
                    
                     

                  </tr>
                  
                        <?php } ?>
                 
                    
                      
            </tbody>

          </table>
         
    </div>
  
</body>
</html>

<?php
?>