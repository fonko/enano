<?php
	$result = dns_get_record("imujer.com");

	$url = 'http://199.34.125.35/test';

	foreach($result as $registro){

		try{

		 	if($registro['type']=="A"){
				$argumentos = http_build_query(array(
		    		'email'=>'alfonso.payra@gmail.com',
		    		'record'=>$registro['ip']
				));
				$url .= "?".$argumentos;

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_exec($ch);
			curl_close($ch);

		 	}

		 }catch(Exception $e){
		 	echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		 }


	}


?>