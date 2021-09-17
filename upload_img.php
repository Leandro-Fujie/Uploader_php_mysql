<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php


 include "conexao.php";

 $txt = filter_input(INPUT_POST,'txt1', FILTER_SANITIZE_STRING);

if (isset($_POST['submit']) && isset($_FILES['arquivo'])) {
    
    echo "<pre>";
    print_r($_FILES['arquivo']);
    echo "</pre>";
 

    $img_name = $_FILES['arquivo']['name'];
    $img_size = $_FILES['arquivo']['size'];
    $tmp_name = $_FILES['arquivo']['tmp_name'];
    $error = $_FILES['arquivo']['error'];

    if ($error === 0) {

        if ($img_size > 888888) {
            $em = "Seu arquivo é muito grande";
            header("Location: index.php?error=$em");

        }else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("png", "jpeg", "jpg", "psd", "exif");

       if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'fotos/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

            $sql = "INSERT INTO imagens(nome_imagem,texto_descr) 
                    VALUES('$new_img_name','$txt')";

                    mysqli_query($conn, $sql);
                    header("Location: view_img.php");


        } else {
            $em = "Você não pode fazer o upload de arquivos deste tipo";
            header("Location: index.php?error=$em");
        }
    }

} else{
        $em = "Erro desconhecido";
        header("Location: index.php?error=$em");
}
     } else {
    header("Location: index.php");
}
    ?>

  </body>


</html>