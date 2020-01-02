<?php
require_once 'DAOPDO.class.php';
$configs=array(
    'dbname'=>'project'
);
$dao=DAOPDO::getSingleton($configs);
$sql="select * from pro order by id";
$arr=$dao->fetchAll($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>pic</th>
        <th>操作</th>
    </tr>
    <?php foreach($arr as $key=>$value){ ?>
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['title'] ?></td>
        <td><?php echo $value['content'] ?></td>
        <td><?php echo $value['pic'] ?></td>
        <td><a id="<?php echo $value['id'] ?>" href="javascript:void(0)" class="btn">删除</a></td>
    </tr>
    <?php } ?>
</table>
<script src="jquery.min.js"></script>
<script>
    $(".btn").click(function () {
        $id=$(this).attr('id');
        $.ajax({
            url:'01-del.php',
            type:'post',
            data:{id:$id},
            dataType:'json',
            success:function (data) {
                if(data.code==1){
                    alert('删除成功');
                    window.location.reload();
                }else{
                    alert('删除失败');
                }
            }
        })
    })
</script>
</body>
</html>
