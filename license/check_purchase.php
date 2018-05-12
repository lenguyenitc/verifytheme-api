<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if($userAgent !== 'Bearsthemes') die();
require_once('../config.php');
require_once('../helper.php');
if (isset($_REQUEST['purchase_code'])) {
  $purchase_code = $_REQUEST['purchase_code'];
  $response = verify_envato_purchase_code( $purchase_code );
  echo json_encode($response);die();
}
