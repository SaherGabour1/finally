<?php



session_start(); 

include 'connection.php';


                    
                    $newuserid =$_POST['id'];
                    $newfullname =$_POST['fname'];
                    $newphone =$_POST['phone'];
                    $newdate =$_POST['date'];
                    $newhour =$_POST['time'];
                  
                  
                
                    $sql2 = "INSERT INTO Test (Testuserid,Testfullname,Testuserphone,TestDate,TestHour)
                    VALUES ('$newuserid','$newfullname','$newphone','$newdate','$newhour')";
                    $params2 = array( $newuserid,$newfullname,$newphone,$newdate,$newhour); 
                    $options2 =  array('Scrollable' => SQLSRV_CURSOR_FORWARD);
                    $result2 = sqlsrv_query( $conn , $sql2, $params2);	
                    
                

   

                            
                            if( $sql2  ) {
                                sqlsrv_commit( $conn );
                                header('Location: massege.php');
                                
                            
                            }


                        else { 
                                    
                            // If something went wrong
                            sqlsrv_rollback( $conn );		
                        }








