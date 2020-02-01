<form method="post" enctype="multipart/form-data">  <!-- o valor usado no input vai ser do tipo arquivo (binário) e não texto -->
    <input type="file" name="uploadFile"/><br/>
    <input type="submit" value="Send">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){  // verifica se method=POST

    $file = $_FILES["uploadFile"];  // guarda info sobre o arquivo no input com name=uploadFile

    if($file["error"]){
        echo "Não foi possível realizar o upload do arquivo";
    }

    if(!is_dir("uploaded-files")){
        mkdir("uploaded-files");
    }

    // move o arquivo do temporário para o diretório uploaded-files no servidor
    if(move_uploaded_file($file["tmp_name"], "uploaded-files" . DIRECTORY_SEPARATOR . $file["name"])){
        echo "Upload realizado com sucesso";
    }else{
        echo "Não foi possível realizar o upload do arquivo";
    }
}
