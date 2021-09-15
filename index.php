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
		} input {
			font-size: 2rem;
		} a {
			text-decoration: initial;		
			color: black;
			font-size: 1.5rem;
		}
	</style>
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


	<form action="upload_img.php"
	method="post"
	enctype="multipart/form-data">

		<input type="file" 
		       required name="arquivo">

		<input type="submit" 
		       name="submit"
		       value="Cadastrar Imagem">
		

     </form>
   
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>


       <form action="upload.php"
	   method="POST"
	   enctype="multipart/form-data">
		<input type="file"
		       name="my_video">

		<input type="submit" 
		       name="submit" 
               value="Upload de Video">
       
	</form>

</body>
</html>