<?php

// $mysqli = new mysqli('localhost', 'root' , '' ,'order_managment') or die(mysqli_error($mysqli));

// if(isset($_POST['Save']))
// {
//     $ref_cmd=$_POST['ref_cmd'];
//     $Date_conf=$_POST['Date_conf'];
//     $montant_cmd=$_POST['montant_cmd'];
//     $mode_paiement=$_POST['mode_paiement'];
//     $etat=$_POST['etat'];
//     $Date_realisation=$_POST['Date_realisation'];

//     $mysqli->query("INSERT INTO orders (ref_cmd, Date_conf, montant_cmd, mode_paiement, etat, Date_realisation) VALUES('$ref_cmd','$Date_conf','$montant_cmd','$mode_paiement','$etat','$Date_realisation' )") or
//     die($mysqli->error);
// }


$connection = mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,'order_managment');

if(isset($_POST['Save']))
{
    $ref_cmd=$_POST['ref_cmd'];
     $Date_conf=$_POST['Date_conf'];
     $montant_cmd=$_POST['montant_cmd'];
     $mode_paiement=$_POST['mode_paiement'];
    $etat=$_POST['etat'];
     $Date_realisation=$_POST['Date_realisation'];
    
     $query ="INSERT INTO orders (ref_cmd, Date_conf, montant_cmd, mode_paiement, etat, Date_realisation) VALUES('$ref_cmd','$Date_conf','$montant_cmd','$mode_paiement','$etat','$Date_realisation' )";
     $query_run = mysqli_query($connection,$query);

     if($query_run)
    {
        echo '<script> alert("data saved") </script>';
        header('localhost:db_orders2.php');
        echo "<script>console.log('data saved')</script>";

    }   else
    {
        echo '<script> alert("data not saved") </script>';
        echo "<script>console.log('data not saved')</script>";
    }

    }

?>