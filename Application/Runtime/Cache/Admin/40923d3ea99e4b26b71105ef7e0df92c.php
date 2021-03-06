<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery jToggler iOS Switch Demos</title>
    <link rel="stylesheet" href="/Public/Plugin/css/jtoggler.styles.css"/>
    <link rel="stylesheet" href="https://www.jqueryscript.net/css/jquerysctipttop.css">
</head>
<body>
<div style="margin-top: 30px;margin-left: 30px;">
    <h1>jQuery jToggler iOS Switch Demos</h1>
    <h2>Two States</h2>
    <input type="checkbox" class="jtoggler">
    <input type="checkbox" checked class="jtoggler"><br><br>
    <input type="checkbox" disabled class="jtoggler">
    <input type="checkbox" checked disabled class="jtoggler">
    <input type="checkbox" class="jtoggler" data-jtlabel="jQueryScript">
    <h2>Three States</h2>
    <input type="checkbox" class="jtoggler" data-jtmulti-state>
    <input type="checkbox" class="jtoggler" disabled data-jtmulti-state>
</div>
</body>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<script type="text/javascript" src="/Public/Plugin/js/jtoggler.js"></script>
<script>
    $(document).ready(() => {
        $('.jtoggler').jtoggler();
        $(document).on('jt:toggled', function (event, target) {
            console.log(event, target);
            console.info($(target).prop('checked'))
        });
        $(document).on('jt:toggled:multi', function (event, target) {
            console.log(event, target);
            console.info($(target).parent().index())
        });
    });
</script>

</html>