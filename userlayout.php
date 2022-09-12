<script language"javascript" type ="text/javascript">  window.history.forward(); </script>



<?php



session_start();

require 'connection.php';

if(isset($_SESSION['idnum'], $_SESSION['passwords'])) {


                            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userlayout.css">


   
</head>
<body>
<?php include 'header.php'; ?>
   
<?php
    


      $sql = "SELECT * from users WHERE idnum = '$newidnum' AND usertype='patient'";
      $result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));
	      $my_array = sqlsrv_fetch_array($result);
      
      if(isset($_SESSION['idnum']) && (sqlsrv_num_rows($result) > 0)){
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
.btn-button {
        text-align: center;
        display: flex;
        font-size: 25px;
        cursor: pointer;
        padding-left: 20%;
        padding-right: 6%;
        margin-top:2%;



} 



 
  .btn5 {

    margin-left: 15%;
border: 2px solid black;
border-radius: 100px;
padding: 0 20px;
color: black;
font-size: 28px;
font-family: "Clarkson",Helvetica,sans-serif;
text-align: center;
text-decoration: none;
background-color: white;
  }

  .btn5:hover {
    background: #987565F3;
    
  }

 
  .btn3 {
    margin-left: 15%;
border: 2px solid black;
border-radius: 100px;
padding: 0 20px;
color: black;
font-size: 28px;
font-family: "Clarkson",Helvetica,sans-serif;
text-align: center;
text-decoration: none;
background-color: white;
  }

  .btn3:hover {
    background: #ff9800;
   
  }






  

          </style>
      </head>
      <body>
          
      <div class="btn-button" >

           <a class="btn3" href="adv.php"> תיאור סיפור אישי</a> 
            <br></br>
            <a class="btn5" href="mypatientadv.php">בקשות שלי</a>

      </div>
        
      </body>
      </html>

      <?php
      }?>
      


      <?php
      $sql = "SELECT * from users WHERE idnum = '$newidnum' AND usertype='worker'";
      $result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));
	      $my_array = sqlsrv_fetch_array($result);
      
      if(isset($_SESSION['idnum']) && (sqlsrv_num_rows($result) > 0)){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}



window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
          <style>
              

  
  .btn4 {
      
      font-family: "Clarkson",Helvetica,sans-serif;
      margin-left:25%;
  
      border: 2px solid black;
    border-radius: 100px;
    padding: 0 20px;
    color:black;
    font-size: 28px;
    font-family: "Clarkson",Helvetica,sans-serif;
    text-align: center;
    text-decoration: none;
    background-color:white;
    
      
    }
 
    .btn4:hover {
      background: #987565F3;
     
    }
  
  
   



    .dropbtn {
   
  color: black;
  border: 2px solid black;
  font-size: 27px;
  width: 500%;
  border-radius: 100px;
  

}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
  padding-left:26%;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 400px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}
.show {display: block;}

.a4 { 
  font-size:20px;
  text-align:center;
  color:black;
  
}    


  
            </style>
        </head>
        <body>
        <br>
        <br>
        
            <div class="dropdown ">
                  <button onclick="myFunction()" class="dropbtn">דוחות</button>
                  <div id="myDropdown" class="dropdown-content">
                    <a class="a4" href="listvolanteertest.php">דוח מועדי בדיקות תורמים</a>
                    <a class="a4" href="listpatient.php">דוח חולים</a>
                    <a class="a4" href="listvolanteer.php">דוח תורמים</a>
                    
                  </div>
                </div>
               
       
              <a class="btn4" href="adv.php"> תיאור סיפור החולה </a>
          
            

           
          
        </body>
        </html>
        
  
        <?php
        }?>

    <?php
      $sql = "SELECT * from users WHERE idnum = '$newidnum' AND usertype='volnteer'";
      $result = sqlsrv_query( $conn , $sql, array(), array("Scrollable" => 'static'));
	      $my_array = sqlsrv_fetch_array($result);
      
      if(isset($_SESSION['idnum']) && (sqlsrv_num_rows($result) > 0)){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <style>
              
  .btn-button {
          text-align: center;
          display: flex;
      
          font-size: 25px;
          cursor: pointer;
          padding-left: 25%;
          padding-right: 6%;
          margin-top:2%;
  
  }
  
  

   
    .btn5 {
      margin-left: 25%;
border: 2px solid black;
border-radius: 100px;
padding: 0 20px;
color: black;
font-size: 28px;
font-family: "Clarkson",Helvetica,sans-serif;
text-align: center;
text-decoration: none;
background-color: white;
    }
  
    .btn5:hover {
      background: #987565F3;
      color: white;
    }
  
   
    .btn3 {
      margin-left: 10%;
border: 2px solid black;
border-radius: 100px;
padding: 0 20px;
color: black;
font-size: 28px;
font-family: "Clarkson",Helvetica,sans-serif;
text-align: center;
text-decoration: none;
background-color: white;
width: 10%;
    }
  
    .btn3:hover {
      background: #ff9800;
      color: white;
    }
  
            </style>
        </head>
        <body>
            <div class="btn-button" >
  
             <a class="btn3" href="massege.php"> הודעות</a> 
              <br></br>
          
              <a class="btn5" href="testdate.php"> תיאום תור לבדיקת התאמה</a>
  
              </div>
          
        </body>
        </html>
  
        <?php
        }?>


    
   


        
        <section>
        <div class="container">
         <strong class="title">פרטיים אישיים</strong>
        
    
        <div class="profile-box box-left">

      <?php

       

          echo "<div class='info2'><strong>טלפון:</strong> <span> $newphone</span></div>";
          echo "<div class='info0'><strong>ת''ז:</strong> <span>$newidnum</span></div>";
          echo "<div class='info1'><span> $newfname $newlname</span><strong>  :שם מלא</strong> </div>";
          echo "<div class='info3'> <span> $newemail</span> <strong> :דואר אלקטרוני</strong></div>";
          echo "<div class='info4'> <span> $newcity</span> <strong> : יישוב</strong> </div>";
          echo "<div class='info5'><strong> גיל :</strong> <span> $newage</span></div>";
          
      ?>
      <br>
      <br>
      <br>
      
      <div class="options">
        <a class="btn2" href="editprofile.php">עריכת פרטיים אישיים</a>
        <a class="btn1" href="resetpasswords.html">עדכון סיסמה</a>
        
      </div>

      
    </div>

  </section>




    </div>

        
    
</body>
</html>

<?php
      }

?>
