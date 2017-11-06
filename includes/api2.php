<?php

/*************************************************************************************
********************* Conexión y llamadas a API Experian e interna *******************
*************************************************************************************/

/******************* Llamadas CURL *****************************/
function ai_curl($url){

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => array(
          'Authorization: '.TOKEN.''
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    return json_decode($response, true);
}

function ai_curl_post($url, $data){

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
          "content-type: application/json",
          'Authorization: '.TOKEN.''
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    return json_decode($response, true);
}

function do_curl($url, $method, $headers, $postText){

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);

    // Headers
    if($headers != ""){
      curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    }
    // Method
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    if($method == "GET"){
      curl_setopt($curl, CURLOPT_HTTPGET, 1);
    }
    else if($method == "POST"){
      curl_setopt($curl, CURLOPT_POSTFIELDS, $postText);
    }
    // Return
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    // Mapeo del resultado
    $res = array_merge(array('code' => $code), array('result' => json_decode($result, true)));
    return $res;
}

/************* Obtener TOKEN de Experian ***********************/
function get_token(){

    $clientId = "23349";
    $consumerKey = "MjMzNDk6OTc0";
    $consumerSecret = "345e2121891f4236b229c0e10fe2bfe1";

    // Header
    $headers = array(
        "grant_type" => "password",
        "client_id" => $clientId,
        "username" => $consumerKey,
        "password" => $consumerSecret,
        "content_type" => "application/x-www-form-urlencoded"
    );
    $postText = http_build_query($headers);

    // URL
    $url = "https://api.ccmp.eu/services/authorization/oauth2/token";

    try {
        $res = do_curl($url, "POST", "", $postText);
    } catch ( Exception $e ) {
        throw new Exception("Error during the call. Here the message: " . $e -> Message);
    }
    return $res['result']['access_token'];
}

/****************** Consultar status segun crm_id en Experian ***********************/
function es_interesado($email) {

    $member = get_member_by_email($email)[0];

    // 0 = interesado, 1 = socio, 2 = nuevo
    $essocio = 2;
    if( isset($member["id"]) ){
      if($member["crm_id"] > 0){
        $essocio = 1;
      } else {
        $essocio = 0;
      }
    }
    return $essocio;
}

/************************* GETs *****************************/

function get_member_by_email($email) {

    $url = "http://".IP.":".PORT."/api/members/?email=".$email;
    $res = ai_curl($url);
    return $res["results"];
}

function get_product_by_productcode($productcode){

    $url = "http://".IP.":".PORT."/api/products?productcode=".$productcode;
    $res = ai_curl($url);
    return $res["results"];
}

function get_purchase_by_member_product($product_id, $member_id){

    $url = "http://".IP.":".PORT."/api/purchases/?product_id=".$product_id."&member_id=".$member_id;
    echo $url;
    $res = ai_curl($url);
    //var_dump($res);
    return $res["results"];
}

function get_fecha(){
  date_default_timezone_set('Europe/Madrid');
  return date("Y-m-d H:i:s");
}

/************************* POSTs *************************/

function post_member_ai($email, $nombre, $apellidos, $telefono, $pais_siglas, $pais_nombre){

    $data = '{
        "firstname": "'.$nombre.'",
        "lastname": "'.$apellidos.'",
        "lastname2": "",
        "email": "'.$email.'",
        "datejoin": "'.get_fecha().'",
        "dateunjoin": null,
        "gender": "",
        "dateofbirth": null,
        "nif": "",
        "language": "",
        "occupation": "",
        "mobile": "'.$telefono.'",
        "phone": "",
        "province_id": "",
        "province": "",
        "cp": "",
        "country_id": "'.$pais_siglas.'",
        "country": "'.$pais_nombre.'",
        "crm_id": 0,
        "source": "",
        "segment": "3",
        "synchro_update" : "'.get_fecha().'"
     }';

    $url = "http://".IP.":".PORT."/api/members/";
    $res = ai_curl_post($url, $data);
    return $res;
}

function post_purchase_ai($member_id, $product_id) {

    $data = '{
  	   "date": "'.get_fecha().'",
       "amountpaid": 0,
       "source": "",
       "status": "A",
       "countitems": 1,
       "type": 2,
       "member": '.$member_id.',
       "product": '.$product_id.'
     }';

    $url = "http://".IP.":".PORT."/api/purchases/";
    $res = ai_curl_post($url, $data);
    return $res;
}

function post_member_experian($members_id, $firstname, $lastname, $email, $telefono, $pais_siglas, $pais_nombre){

  // Token
  $token = get_token();

  // Header
  $headers = array(
    "Authorization: Bearer ".$token,
    "content-type: application/json",);

    $url = "https://api.ccmp.eu/services2/api/Recipients/";

    date_default_timezone_set('Europe/Madrid');
    $now = date("m/d/Y H:i:s");

    $postText = '{
      "apiPostId": "23",
      "data": [
        {
          "name":"members_id",
          "value":"'.$members_id.'"
        },
        {
          "name": "firstname",
          "value": "'.$firstname.'"
        },
        {
          "name": "lastname2",
          "value": "'.$lastname.'"
        },
        {
          "name": "email",
          "value": "'.$email.'"
        },
        {
          "name":"mobile_sp1_status_id",
          "value":"100"
        },
        {
          "name":"email_sp2_status_id",
          "value":"100"
        },
        {
          "name": "mobile",
          "value": "'.$telefono.'"
        },
        {
          "name": "country_id",
          "value": "'.$pais_siglas.'"
        },
        {
          "name": "country",
          "value": "'.$pais_nombre.'"
        },
        {
          "name":"datejoin",
          "value":"'.$now.'"
        },
        {
          "name":"synchro_update",
          "value":"'.$now.'"
        }]
      }';

      $res = do_curl($url,"POST",$headers,$postText);
      return $res["result"];

}


function post_member_purchase_experian($purchase_id, $product_id, $member_id, $email){

  // Token
  $token = get_token();
  // Header
  $headers = array(
    "Authorization: Bearer ".$token,
    "content-type: application/json",);

    $url = "https://api.ccmp.eu/services2/api/Recipients/";

    date_default_timezone_set('Europe/Madrid');
    $now = date("Y-m-d H:i:s");

    $postText = '{
      "apiPostId": "26",
      "data": [
        {
          "name":"purchase_id",
          "value":"'.$purchase_id.'"
        },
        {
          "name":"members_id",
          "value": "'.$member_id.'"
        },
        {
          "name":"product_id",
          "value": "'.$product_id.'"
        },
        {
          "name":"date",
          "value":"'.$now.'"
        },
        {
          "name":"amountpaid",
          "value":"0"
        },
        {
          "name":"type",
          "value":"2"
        },
        {
          "name":"Status",
          "value":"A"
        },
        {
          "name":"countitems",
          "value":"1"
        },
        {
          "name":"source",
          "value":"'.$email.'"
        }
      ]
    }';
    $res = do_curl($url,"POST",$headers,$postText);
    //echo $purchase_id."-".$product_id."-".$member_id;
    return $res["result"];

}

?>
