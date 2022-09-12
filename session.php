<?php
if (!isset($_SESSION)) {
        session_start();
        }
        if($_SESSION['idnum']!=true){
            header('Location: signin.html');
            die();
            }
            ?> 


