<?php
require(dirname(__FILE__) .'/../../../../wp-load.php');

    class RfCoreCurl {
        public function __construct(){
        }

        public static function curl($url , $method , $token , $body){

            if($body != null){
                $body_client = json_encode($body);
            }else{
                $body_client = "";
            }

            $curl = curl_init();
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => DOMAIN_SERVICES_PLATFORM_COURSES.$url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => $body_client,
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer ' . $token,
                    'Content-Type: application/json'
                ),
              ));
        
            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);
        
            curl_close($curl);
    
            return $response;

        }

    }
?>