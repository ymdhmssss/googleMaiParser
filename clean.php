<?php
$pdo=new PDO('sqlite:data.db');  //sqlite数据库文件路径自己改
try{
  $query="delete from mailparser;"; // 定义SQL语句
  $result=$pdo->prepare($query);     // prepare()方法准备查询语句
  if ($result === false) {
        echo json_encode($pdo->errorInfo());
    } else {
      $result->execute();
  }
  echo 1;
}catch(Exception $exception){
  echo $exception->getMessage();
}
?>

