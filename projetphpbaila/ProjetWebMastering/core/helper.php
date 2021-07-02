<?php
function redirect_url($controller="security", $page="login"){
    header("location:".WEB_ROOT."?controller=$controller&page=$page");
    exit;
}
//dd= dump die
function dd($data){
    echo("<pre>");
    var_dump($data);
    echo("</pre>");
    die;
}
?>