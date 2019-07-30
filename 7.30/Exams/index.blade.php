<?php
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap 实例 - 边框表格</title>

    <title>Document</title>
</head>
<body>
<form action="index" method="get">
    姓名 <input type="text" name="uname">
    <input type="submit" value="搜索">
</form>
<a href="add">添加</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>行号</th>
            <th>班车车次</th>
            <th>姓名</th>
            <th>身份证</th>
            <th>性别</th>
            <th>单位</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($res as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->bianhao}}</td>
            <td>{{$v->uname}}</td>
            <td>{{$v->shenfen}}</td>
            <td>{{$v->sex}}</td>
            <td>{{$v->danwei}}</td>
            <td>
                <a href="3" onclick="del({{$v->id}})">删除</a>
            </td>
        </tr>
            @endforeach
        </tbody>

    </table>
{{ $res->links() }}

</body>
</html>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    function del(id){
        $.ajax({
            url:'{{url('exams/del')}}',
            data:{id:id},
            type:'get',
            dataType:'json',
            success:function(e){
                if (e.stutes) {
                    alert('删除成功');location.href="{{url('exams/index')}}";
                }
            }
        })
    }
</script>