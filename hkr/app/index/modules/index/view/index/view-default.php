<h1>Hola</h1>
<?php
foreach ($this->usuarios as $usuarios) {
	print_r($usuarios->email);
	echo "<br>";
}
echo R::rlink(array("b"=>"./","m"=>"index","v"=>"otro"));

?>