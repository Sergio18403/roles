<?php
$db_host="byyreqaippcjsqladzp3-mysql.services.clever-cloud.com"; //localhost server 
$db_user="ukutwgynwsb0dtd5";	//database username
$db_password="uDw45lxLGKAOdjhXT0dj";	//database password   
$db_name="byyreqaippcjsqladzp3";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



