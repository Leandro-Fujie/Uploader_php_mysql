<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Uploader imagens e videos</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
			background: #6A5ACD;
		} input {
			font-size: 2rem;
		} a {
			text-decoration: initial;		
			color: black;
			font-size: 1.5rem;
		}

	</style>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
</head>
<body>

	<a href="view.php">GALERIA DE VIDEOS</a>||<a href="view_img.php">GALERIA DE IMAGENS</a>
	    <br>
		<br>
		<br>

    <?php if (isset($_GET['error'])) { ?>
    	<p><?=$_GET['error']?></p>    
    <?php } ?>

    <h1>Carregamento de Imagens e Videos</h1>

        <br>
		<br>
		<br> 
	<form action="upload_img.php"
	method="post"
	enctype="multipart/form-data">

		<input type="file" 
		       required name="arquivo">



		<label>Descrição: </label>
		<input type="text" name="txt1">

        <br>
		<br>
		<br>
		
		<input type="submit" 
		       name="submit"
		       value="Cadastrar Imagem">
		<br>
		<br>
		<br> 

     </form>
   
		<br>


       <form action="upload.php"
	   method="post"
	   enctype="multipart/form-data">

		<input type="file"
		       name="my_video">

        <label>Descrição: </label>
		<input type="text" name="txt2">

        <br>
		<br>
		<br>

		<input type="submit" 
		       name="submit" 
               value="Upload de Video">
        <br>
		<br>
		<br> 
       
	</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>