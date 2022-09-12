

<?php

session_start(); 
require ('connection.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mypatientadv.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>




  <title>בקשות שלי</title>
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
      <a href="index.html" >התנתק </a></li></a>
      </div>

  
          <hr width="70%" > 
          <br>
  
<br>
<h2 class="middle-title">
           בקשות שלי
          </h2>
          <br></br>

          <table class="table table-dark table-striped" style="border:1px solid black;">
            <thead>
              <tr class="tr1" >
              <th> </th>
              <th>  </th>
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

                  $newidnum1 = $_SESSION['idnum'];   
                      $tsql =     "SELECT * FROM users   WHERE idnum = '$newidnum1' ";  
                        $result = sqlsrv_query($conn, $tsql, array(), array ("Scrollable" => SQLSRV_CURSOR_KEYSET));   
                          while($row=sqlsrv_fetch_array($result))    {  
                                $newidnum1 = $row['idnum']; 
                                        $newfname1 = $row['fname']; 
                                        $newlname1 = $row['lname']; 
                                        $newphone1 = $row['phone']; 
                                        $newage1 = $row['age'];
                                        $newemail1 = $row['email']; 
                                        $newcity1 = $row['city'];   
                                        
                                          }   
                    

                
                                    $sql = "SELECT * from patientadv WHERE fname = '$newfname1' AND phone='$newphone1'";
                                    $result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));
                                    $my_array = sqlsrv_fetch_array($result);
                                       
                
                                          
                                 if((sqlsrv_num_rows($result) > 0)){
                            
                        
                            
                                  
     
                    ?>
              
                    <tr>
                    <form action="updateadvpage.php" method="POST" >
                    <td>  <button class="a3" name="deletbtn">למחוק </button></td>
                    </form>
                    <td>  <button class="a2" onclick="openForm()">לעדכן </button></td>
                               
                    
                      <td><?php 
                      $query = sqlsrv_query($conn,"SELECT body FROM patientadv WHERE fname = '$newfname1' AND phone='$newphone1'");
                      while($row =sqlsrv_fetch_array($query)){
                        $newbody = $row['body'];



                        echo $newbody;}?></td>




                      <td><?php 
                      $query = sqlsrv_query($conn,"SELECT  donatearea FROM patientadv WHERE fname = '$newfname1' AND phone='$newphone1'");
                      while($row =sqlsrv_fetch_array($query)){
                        $newdonatearea = $row['donatearea'];



                        echo $newdonatearea;}?></td>

                      <td><?php 
                      $query = sqlsrv_query($conn,"SELECT  bloodtype FROM patientadv WHERE fname = '$newfname1' AND phone='$newphone1'");
                      while($row =sqlsrv_fetch_array($query)){
                        $newbloodtype = $row['bloodtype'];



                        echo $newbloodtype;}?></td>
                      <td><?php echo  $newphone1; ?></td>
                      <td><?php echo  $newage1; ?></td>
                      <td><?php echo  $newfname1;?></td>
                     
     

                  </tr>
                
                        <?php  }  ?>
                    
                      
            </tbody>

          </table>
          <div class="form-popup" id="myForm">
  <form action="updateadvpage.php" class="form-container" method="POST">
    <h1>עדכון סיפור אישי</h1>
    <br>

    <label class="label8" for="age" name="age">  :  סוג דם</label>
                <br></br>
                <div class="col-md-3 row">
                        <select id="R1C3" name="bloodtype"  >
                            <option value="0">-- סוגי דם--</option>
                            <option  value="A+">A+</option>
                            <option  value="B+">B+</option>
                            <option  value="AB+">AB+</option>
                            <option  value="AB-">AB-</option>
                            <option  value="O-">O-</option>
                            <option  value="O+">O+</option>

                        </select>
                        </div>
                      <br>
    <label for="donatearea"><b>איזור תרימה</b></label>
    <input type="text" placeholder="איזור תרימה" name="donatearea" required>

    <label for="body"><b>תיאור סיפור</b></label>
    <textarea type="textarea" placeholder="תיאור סיפור" name="body" required  style="width: 548px; height: 100px;"></textarea>
    <br>
    <br>

    <button  class="btn" type="submit" name="update">עדכן</button>
    <button type="button" class="btn cancel" onclick="closeForm()">בטל</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
     
    </div>

</body>
</html>



