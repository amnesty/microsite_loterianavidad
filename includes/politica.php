<?php

  include_once('config.php');
  include_once('connect.php');
  include_once('api2.php');

  $members = get_member_by_email($_POST['email'])[0];

  $return = $members;

  $return["json"] = json_encode($return);
  echo json_encode($return);

?>
