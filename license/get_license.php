<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if($userAgent !== 'Bearsthemes') die();
require_once('../config.php');
require_once('../helper.php');
if (isset($_REQUEST['purchase_code'])) {
  $purchase_code = $_REQUEST['purchase_code'];
  $query = "SELECT * FROM wp_verifytheme_domains as d WHERE d.purchase_code = '{$purchase_code}' AND d.status = 1 LIMIT 1";
  $fetch =  $mysqli->query($query);
  $server_name = '';
  if($fetch->num_rows > 0){
    while ($row = $fetch->fetch_assoc()){
      $server_name = $row['server_name'];
    }
  }
  echo $server_name;die();
}
