<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Table Search Plugin Example</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
    <link href="/Public/Plugin/css/jquery-editable-select.css" rel="stylesheet"/>
</head>
<body>

<div class="col-sm-2" style="margin-top:50px;margin-left: 30px;">
    <input type="text" id="input" placeholder="Case Sensitive" class="form-control">
        <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>jQuery</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JavaScript</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CSS</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>HTML5</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>莹</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>浅莹</td>
                    <td>18</td>
                </tr>
            </tbody>
        </table>
</div>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script src="/Public/Plugin/js/table_search.js"></script>
<script>
    $('#input').keyup(function () {
        table_search($('#input').val(),$('#table tbody tr'),'012');
    });
</script>

</body>
</html>