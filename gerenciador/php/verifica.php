<?php

    if( ! isset($_SESSION['nivel']) || $_SESSION['nivel'] == 'negado')
    {

       echo "<script>self.location='php/login.php';</script>";
	   die;

    }


    if( $_SESSION['nivel'] != 'A' && $_SESSION['nivel'] != 'B' )
    {

       echo "<script>self.location='login.php';</script>";

    }



?>