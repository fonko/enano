<?php
$result = dns_get_record("imujer.com");


$opciones = array(
  'http'=>array(
    'method'=>"GET"
  )
);


foreach($result as $registro){

	try{
		$url = 'http://199.34.125.35/test';

	 	if($registro['type']=="A"){
			$argumentos = http_build_query(array(
	    		'email'=>'alfonso.payra@gmail.com',
	    		'record'=>$registro['ip']
			));
			$url .= "?".$argumentos;

			echo $url;

			$contexto = stream_context_create($opciones);
			$fichero = file_get_contents($url, false, $contexto);

	 	}

	 }catch(Exception $e){
	 	echo 'Excepción capturada: ',  $e->getMessage(), "\n";
	 }

}


?>