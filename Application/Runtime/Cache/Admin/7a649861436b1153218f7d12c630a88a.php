<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Public/Admin/css/bootstrap.css">
    <link rel="stylesheet" href="/Public/Plugin/css/component-chosen.css">
    <title>select的不同选择</title>
</head>
<body>

<div class="col-xs-12 col-md-6 mb-5">
    <label>Multiple:</label>
    <select id="multiple" class="form-control form-control-chosen" data-placeholder="Please select..." multiple>
        <option></option>
        <option selected>Option One</option>
        <option>Option Two</option>
        <option selected>Option Three is a very very very very very very very very very very long
            text
        </option>
        <option>Option Four</option>
        <option>Option Five</option>
        <option>Option Six</option>
        <option>Option Seven</option>
        <option>Option Eight</option>
    </select>
</div>

</body>
</html>