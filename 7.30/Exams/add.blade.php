<?php
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('exams/add_do')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>班车车次</td>
            <td>
                <select class="form-control" name="bianhao">
                   <option>10001</option>
                    <option>10002</option>
                    <option>10003</option>
                    <option>10004</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td>性别</td>
            <td>
                <input type="radio" name="sex" value="男">男
                <input type="radio" name="sex" value="女">女
            </td>
        </tr>
        <tr>
            <td>身份证</td>
            <td><input type="text" name="shenfen"></td>
        </tr>
        <tr>
            <td>单位</td>
            <td><input type="text" name="danwei"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="提交"></td>
        </tr>
    </table>
</form>
</body>
</html>
