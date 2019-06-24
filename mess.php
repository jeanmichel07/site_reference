<?php
    $conn = memcache_connect('localhost','root',"",'nl_base');

    extract($_POST);
    if (isset($_POST['name'])&& isset($_POST['mail']) && isset($_POST['titre']) && isset($_POST['message'])){
       $query="INSERT INTO `visitor`( `name`, `titre`, `email`, `message`) VALUES('$name','$mail','$titre','$message')";
       mysqli_query($conn,$query);
    }