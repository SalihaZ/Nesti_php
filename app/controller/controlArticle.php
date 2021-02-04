<?php
include('app/entity/Article.php');
$model = new Article ();
$article = $model -> readAll(); 

var_dump($article);
?>