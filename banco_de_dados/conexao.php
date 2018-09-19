<?php
$utf8 = header("Content-type: text/html; charset=utf-8");
$link = new mysqli('localhost','root','','db_cadastro');
$link->set_charset('utf8');

