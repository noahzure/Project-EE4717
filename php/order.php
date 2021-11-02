<?php session_start(); ?>

<?php
                    
    if (!isset($_SESSION['customer']))
    {
    $_SESSION['customer'] = array('firstName'=>'','email'=>'','phone'=>'','address'=>'','zip'=>'','notes'=>'');
    }
?>  

<?php
if (!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();
}
?>  