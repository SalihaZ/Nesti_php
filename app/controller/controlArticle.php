<?php

$model = new ModelArticle ();
$article = $model -> readAll(); 

var_dump($article);
?>