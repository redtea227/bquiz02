<?php 
include_once "../base.php";

$Que->save(['text'=>$_POST['subject']]);
$que_id=$Que->find(['text'=>$_POST['subject']])['id'];

foreach ($_POST['opts'] as $opt) {
  $Vote->save(['text'=>$opt,'que_id'=>$que_id]);
}

to("../backend.php?do=que");
?>