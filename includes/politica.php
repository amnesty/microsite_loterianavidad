<?php

  include_once('config.php');
  include_once('connect.php');
  include_once('api2.php');

  $member_id = get_member_by_email($_POST['email'])[0]["id"];

  $return['member_id'] = $member_id;

  $return["json"] = json_encode($return);
  echo json_encode($return);

?>
