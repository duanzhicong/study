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
    <style>
    *{
        margin:0;
        padding:0;
    }
        table{
            margin:50px auto;
            background-color:red;
        }
        td{
            width:80px;
            height:50px;
            border-bottom:1px solid #000;
            text-align:center;
        }
        input{
            width:80px;
            height:30px;
        }
    </style>
</head>

<body>
<table cellspacing="0">
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
    <tr>
        <td>自动</td>
        <td><input type="text" id='title'></td>
        <td><input type="text" id='content'></td>
        <td><input type="text" id='pic'></td>
        <td><a href="javascript:void(0)" class="smt">提交</a></td>
    </tr>
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
    $(".smt").click(function(){
        $title=$("#title").val();
        $content=$("#content").val();
        $pic=$("#pic").val();
        $.ajax({
            url:'01-ins.php',
            type:'post',
            data:{
                title:$title,
                content:$content,
                pic:$pic
                },
            dataType:'json',
            success:function (data) {
                if(data.code==1){
                    alert('增加成功');
                    window.location.reload();
                }else{
                    alert('增加失败');
                }
            }
        })
    })
</script>
</body>
</html>
