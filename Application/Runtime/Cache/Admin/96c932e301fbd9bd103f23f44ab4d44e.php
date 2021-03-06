<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery multiInput Plugin Example</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
    <link href="/Public/Plugin/css/jq.multiinput.min.css" rel="stylesheet"/>
    <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="col-sm-2" style="margin-top:50px;margin-left: 30px;">
    <form>
        <textarea class="form-control" id="participants" name="participants">[{"tn_firstname":"jquery","tn_lastname":"script"},{"tn_firstname":"html5","tn_lastname":"css3"}]</textarea>
    </form>
</div>

</body>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script src="/Public/Plugin/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/Plugin/js/jq.multiinput.js"></script>
<script>
    $(document).ready(function () {
        $('#participants').multiInput({
            json: true,
            input: $('<div class="row inputElement">\n' +
                '<div class="multiinput-title col-xs-12">Teilnehmer <span class="number">1</span></div>\n' +
                '<div class="form-group col-xs-6">\n' +
                '<input class="form-control" name="tn_firstname" placeholder="Vorname" type="text">\n' +
                '</div>\n' +
                '<div class="form-group col-xs-6">\n' +
                '<input class="form-control" name="tn_lastname" placeholder="Nachname" type="text">\n' +
                '</div>\n' +
                '</div>\n'),
            limit: 10,
            onElementAdd: function (el, plugin) {
                console.log(plugin.elementCount);
            },
            onElementRemove: function (el, plugin) {
                console.log(plugin.elementCount);
            }
        });
    });
</script>

</html>