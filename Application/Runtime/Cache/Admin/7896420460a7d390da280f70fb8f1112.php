<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery popupWindow Plugin Examples</title>
    <link rel="stylesheet" href="/Public/Plugin/css/popupWindow.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>
<body>
<div style="margin-top: 30px;margin-left: 30px;">
    <button id="alertClick">alert</button>
    <button id="promptClick">prompt</button>
    <button id="confirmClick">confirm</button>
</div>
</body>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/Public/Plugin/js/popupWindow.js"></script>
<script type="text/javascript" src="/Public/Plugin/js/show_ads.js"></script>
<script>
    $("#alertClick").click(function () {
        var popWin1 = $.popupWindow({
            type: 'alert',
            width: '300',
            title: 'Alert Dialog',
            content: 'I am an alert box',
            icon: 'error',
            onClosed: function (arg) {
                console.log(arg)
            }
        });

    });
    $("#promptClick").click(function () {
        var popWin2 = $.popupWindow({
            type: 'prompt',
            width: '400',
            title: 'Prompt Dialog',
            content: 'I am a prompt box',
            icon: 'correct',
            onClosed: function (arg1, arg2) {
                console.log(arg1);
                console.log(arg2)
            }
        });
    });
    $("#confirmClick").click(function () {
        var popWin3 = $.popupWindow({
            type: 'confirm',
            width: '300',
            title: 'Confirm Dialog',
            content: 'jQueryScript.Net',
            icon: 'hint',
            onClosed: function (arg) {
                console.log(arg);
            }
        });
    });
</script>

</html>