<?php

session_start(); 

    include 'connection.php';
    

    if(isset($_POST['insert'])){
        
    $newfname =$_POST['fname'];
    $newphone =$_POST['phone'];
    $newage =$_POST['age'];
    $newbody=$_POST['body'];
    $newdonatearea =$_POST['donatearea'];
    $newbloodtype=$_POST['bloodtype']; 

          
                $tsql = "INSERT INTO patientadv  (fname, age, body, bloodtype, phone, donatearea) 
                VALUES ('$newfname','$newage','$newbody','$newbloodtype','$newphone','$newdonatearea')";
                $parameters = array($newfname,$newage,$newbody,$newbloodtype,$newphone,$newdonatearea);
                $stmt = sqlsrv_query($conn, $tsql, $parameters);
                if( $stmt === false ){
                    die( print_r( sqlsrv_errors(), true));
                } else {
                  
                   header ('location:patientadver2.php');
                }
                
                sqlsrv_free_stmt( $stmt);
                

            }

                  ?>