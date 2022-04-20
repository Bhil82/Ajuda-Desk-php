<?php
//verifica se o usuario está aurenticado...
$uruario_auteticado = false;

$usuario_app  = array(
				array("email"=>"birate@com.br","senha"=>'1234567'),
				array("user"=>"ser@teste.com.br","senha"=>'bcd'),
			 );
/*
echo "<pre>";
print_r($usuario_app);
echo "</pre>";
*/

foreach ($usuario_app as $user) {
/*
	echo "Usuário App" .  ." / " .;
	echo "<br>";
	echo "Usuário form" .. " /".  ;

*/
		echo "<hr>";
		if ($email['email'] == $_POST['email']  && $user['senha'] == $_POST['senha']){
			$uruario_auteticado = true;
		}
	if ($uruario_auteticado){
		echo'usuario autenticado';
}else{
	header('ocation: index.php?login=erro');
}

}

// metodosde recebimeto
/*
print_r($_GET);

echo("<BR>");
//
echo $_GET["email"];
echo("<BR>");//
echo $_GET["senha"];

*/
/*
print_r($_POST);

//
echo $_POST["email"];
echo("<BR>");//
echo $_POST["senha"];
*/


?>