<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	  <form action="v1/Api.php" method="post">
	  	<h1>ADICIONAR HEROI</h1>
		  <p>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="contato"></p>
		  <p>Realname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="realname" id="contato"></p>
	    <p>Rating:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="rating" id="contato"></p>
	    <p>Team affiliation:&nbsp;<input type="text" name="teamaffiliation" id="contato"></p>
         
       <input type="submit" value="Adicionar heroi" name = "createhero"/>

    </form>

    <br><br> 

    <form action="v1/Api.php" method="post">
    	<h1>ATUALIZAR HEROI</h1>
	    <p>ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id" id="contato"></p>
		  <p>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="contato"></p>
		  <p>Realname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="realname" id="contato"></p>
	    <p>Rating:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="rating" id="contato"></p>
	    <p>Team affiliation:&nbsp;<input type="text" name="teamaffiliation" id="contato"></p>

	    <input type="submit" value="Atualizar heroi" name = "updatehero"/>

    </form>

    <br><br> 

    <form action="v1/Api.php" method="post">
    	<h1>DELETAR HEROI</h1>
	    <p>ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id" id="contato"></p>

	    <input type="submit" value="Deletar heroi" name = "deletehero"/>
    	
    </form>

   <br><br> 

    <form method="post" action = "v1/Api.php"> 
    	<h1>MOSTRAR HEROI</h1>
    	<input type="submit" value="Mostrar heroi" name = "getheroes"/></form>
    

</body>
</html>