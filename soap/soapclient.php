<?php
class client
{
	public function __construct()
	{
		$params = array('location' 'http://xampp/hosting/soapservercoba.php','uri'=> 'urn://xampp/hosting/soapservercoba.php','trace' => 1);
		$this ->instance = neew SoapClient(NULL,$params);
	}
	public function getName($id_array)
	{
		return $this->instance ->__soapCall('getStudentName',$id_array);
	}
}
$client = new client;
?>