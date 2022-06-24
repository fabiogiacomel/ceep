


<html>
<body>

<form action="teste.php" method="post">
Name: <input type="text" name="nome"><br>
E-mail: <input type="text" name="email"><br>
Fone: <input type="text" name="fone"><br>
<input type="submit">
</form>

	<?php
	$nome = $_POST['nome'];
	
	echo $nome;
	?>
</body>
</html>