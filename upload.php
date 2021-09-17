<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>


<?php 

include "db_conn.php";

$txt2 = filter_input(INPUT_POST,'txt2', FILTER_SANITIZE_STRING);

if (isset($_POST['submit']) && isset($_FILES['my_video'])) {

    $video_name = $_FILES['my_video']['name'];
    $tmp_name = $_FILES['my_video']['tmp_name'];
    $error = $_FILES['my_video']['error'];

    if ($error === 0) {
        $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

        $video_ex_lc = strtolower($video_ex);

        $allowed_exs = array("mp4", 'webm', 'avi', 'flv', 'mkv', 'mpeg-4', 'mov', 'wmv', 'webm');

        if (in_array($video_ex_lc, $allowed_exs)) {
            
            $new_video_name = uniqid("video-", true). '.'.$video_ex_lc;
            $video_upload_path = 'uploads/'.$new_video_name;
            move_uploaded_file($tmp_name, $video_upload_path);

            // Now let's Insert the video path into database
            $sql = "INSERT INTO videos(videos_url,descricao) VALUES ('$new_video_name','$txt2')";

            mysqli_query($conn, $sql);
            header("Location: view.php");
            
        }else {
            $em = "Você não pode fazer o upload de arquivos deste tipo";
            header("Location: index.php?error=$em");
        }
    }


}else{
    header("Location: index.php");
} ?>

</body>


</html>