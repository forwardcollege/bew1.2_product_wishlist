<?php

$database = connectToDB();

$is_wishlist =$_POST['is_wishlist'];
$id = $_POST['id'];

if ($is_wishlist == 1){
    $sql = "UPDATE products SET is_wishlist = 0 WHERE id= :id";
}else{
    $sql = "UPDATE products SET is_wishlist = 1 WHERE id = :id";
}

$query = $database ->prepare ($sql);

$query->execute([
    'id' =>$id
]);

header("Location: /home");
exit;