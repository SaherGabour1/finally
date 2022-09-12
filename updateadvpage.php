<?php 

  session_start();

  require 'connection.php';
  require 'functions.php';

                        
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
                                   

                    if(isset($_POST['update'])) {
                   
                    $newbloodtype =clean($_POST['bloodtype']);
                    $newdonateare =clean($_POST['donatearea']);
                    $newbody =clean($_POST['body']);

                    $query = "UPDATE patientadv SET bloodtype = '$newbloodtype', donatearea = '$newdonateare',body='$newbody' 
                    WHERE fname='$newfname1' and phone='$newphone1'";
                    if($result = sqlsrv_query($conn, $query)) {

                  
                header("location:mypatientadv.php");
                    exit;

                    } else {

                    die("Error with the query");

                    }

                }


                if(isset($_POST['deletbtn'])) {
                $newfname =clean($_POST['fname']);
                $newage =clean($_POST['age']);
                $newphone =clean($_POST['phone']);
                $newbloodtype =clean($_POST['bloodtype']);
                $newdonateare =clean($_POST['donatearea']);
                $newbody =clean($_POST['body']);

                $query = "DELETE FROM patientadv where fname='$newfname1' and phone='$newphone1'";
                if($result = sqlsrv_query($conn, $query)) {

              
            header("location:mypatientadv.php");
                exit;
                }
            }
                ?>