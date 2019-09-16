<?php
require 'Users_Manager.php';

if (isset($_POST['score'])) {
$score=$_POST['score'];
$getScore= new \model\Users_Manager();
$getScore=$getScore->insertScore($score);
}