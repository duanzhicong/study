<?php
$title=$_POST['title'];
$content=$_POST['content'];
$pic=$_POST['pic'];
require_once 'DAOPDO.class.php';
$configs=array(
    'dbname'=>'project'
);
$dao=DAOPDO::getSingleton($configs);
$sql="insert into pro(id,title,content,pic) values(null,'$title','$content','$pic')";
$res=$dao->query($sql);
if($res){
    $arr=array(
        'code'=>1,
        'msg'=>'增加成功'
    );
    echo json_encode($arr);
}else{
    $arr=array(
        'code'=>0,
        'msg'=>'增加失败'
    );
    echo json_encode($arr);
}


