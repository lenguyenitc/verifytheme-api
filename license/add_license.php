<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if($userAgent !== 'Bearsthemes') die();
require_once('../config.php');
require_once('../helper.php');
if (isset($_REQUEST['purchase_code']) && isset($_REQUEST['domain']) && isset($_REQUEST['user_name'])) {

    $purchase_code = $_REQUEST['purchase_code'];
    $server_name = $_REQUEST['domain'];
    $user_name = $_REQUEST['user_name'];
    // Check exist item
    $query = "SELECT * FROM wp_verifytheme_domains as d WHERE d.purchase_code = '{$purchase_code}' AND d.server_name = '{$server_name}' AND d.user_name = '{$user_name}' LIMIT 1";
    $fetch =  $mysqli->query($query);

    if($fetch->num_rows > 0){
      // update data
      $query = "UPDATE wp_verifytheme_domains as d SET d.status = 1 WHERE d.purchase_code = '{$purchase_code}' AND d.server_name = '{$server_name}' AND d.user_name = '{$user_name}'";
    }else{
      // insert data
      $query = "INSERT INTO wp_verifytheme_domains SET purchase_code = '{$purchase_code}', server_name = '{$server_name}', user_name = '{$user_name}'";
    }
    $result =  $mysqli->query($query);
    echo $result;die();

}
