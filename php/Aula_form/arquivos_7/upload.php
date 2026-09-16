<?php
$uploaddir = "upload/";
$uploadfile = $uploaddir . basename($_FILES["arquivo"]["name"]);


if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
    echo "Arquivo enviado com sucesso!";
} elseif($_FILES['arquivo']['size'] > 40000) {
    echo "Arquivo maior que o permitido. ";
} elseif(in_array($_FILES['arquivo']['type'], [ "png" ,"jpg" ,"gif"])){
    echo "Arquivo enviado com sucesso!";
} else {
    echo "Arquivo invalido. ";
}
    
echo $_FILES['arquivo']['size'];
echo $_FILES['arquivo']['type'];


?>