<?php
//renderiza la pantalla "home"
require 'src/render.php';
$title="El gigante de hierro";
echo render('home',['title'=>$title]);

?>