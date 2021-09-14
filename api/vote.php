<?php include_once "../base.php";
// print_r($_POST);
// 子類選項=>父類主題
$opt=$Vote->find($_POST['opt']);
$que=$Que->find($opt['que_id']);
// print_r($opt);
$opt['vote']++;
$que['total_vote']++;
$Vote->save($opt);
$Que->save($que);

to("../index.php?do=result&id=".$que['id']);