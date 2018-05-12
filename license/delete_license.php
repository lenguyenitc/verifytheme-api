<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if($userAgent !== 'Bearsthemes') die();
require_once('../config.php');
require_once('../helper.php');
if (isset($_REQUEST['purchase_code'])) {
  $purchase_code = $_REQUEST['purchase_code'];
  $query = "UPDATE wp_verifytheme_domains as d SET d.status = 0 WHERE d.purchase_code = '{$purchase_code}' AND d.status = 1";
  $result = $mysqli->query($query);
  echo $result;die();
}
