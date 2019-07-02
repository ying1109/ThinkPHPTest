<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 4 Chosen jQuery Plugin Examples</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="/Public/Plugin/css/component-chosen.css" rel="stylesheet"/>
</head>
<body> 
<div style="margin-top: 30px;margin-left: 30px;">

    <div class="col-md-4 mb-5">
        <label>Single:</label>
        <select id="single" class="form-control form-control-chosen" data-placeholder="Please select...">
            <option></option>
            <option>Option One</option>
            <option>Option Two</option>
            <option>Option Three</option>
            <option>Option Four</option>
            <option>Option Five</option>
            <option>Option Six</option>
            <option>Option Seven</option>
            <option>Option Eight</option>
        </select>
    </div>
    <div class="col-md-4 mb-5">
        <label>Single (required):</label>
        <select id="required" class="form-control form-control-chosen-required" data-placeholder="Please select...">
            <option></option>
            <option>Option One</option>
            <option>Option Two</option>
            <option>Option Three</option>
            <option>Option Four</option>
            <option>Option Five</option>
            <option>Option Six</option>
            <option>Option Seven</option>
            <option>Option Eight</option>
        </select>
    </div>
    <div class="col-md-4 mb-5">
        <label>Multiple:</label>
        <select id="multiple" class="form-control form-control-chosen" data-placeholder="Please select..." multiple>
            <option></option>
            <option>Option One</option>
            <option>Option Two</option>
            <option>Option Three</option>
            <option>Option Four</option>
            <option>Option Five</option>
            <option>Option Six</option>
            <option>Option Seven</option>
            <option>Option Eight</option>
        </select>
    </div>
    <div class="col-md-4 mb-5">
        <label>Optgroup:</label>
        <select id="optgroup" class="form-control form-control-chosen" data-placeholder="Please select..." multiple>
            <optgroup label="Label A">
                <option>Option One</option>
                <option>Option Two</option>
                <option>Option Three</option>
                <option>Option Four</option>
            </optgroup>
            <optgroup label="Label B">
                <option>Option Five</option>
                <option>Option Six</option>
                <option>Option Seven</option>
                <option>Option Eight</option>
            </optgroup>
      </select>
    </div>
    <div class="col-md-4 mb-5">
        <label>Clickable optgroup:</label>
        <select class="form-control form-control-chosen-optgroup" title="clickable_optgroup" data-placeholder="Please select..." multiple>
            <optgroup label="Label A">
                <option>Option One</option>
                <option>Option Two</option>
                <option>Option Three</option>
                <option>Option Four</option>
            </optgroup>
            <optgroup label="Label B">
                <option>Option Five</option>
                <option>Option Six</option>
                <option>Option Seven</option>
                <option>Option Eight</option>
            </optgroup>
        </select>
    </div>
</div>
</body>

<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/Public/Plugin/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/Plugin/js/tether.js"></script>
<script type="text/javascript" src="/Public/Plugin/js/chosen.jquery.min.js"></script>
<script type="text/javascript">
    $('.form-control-chosen').chosen({
        allow_single_deselect: true,
        width: '100%'
    });
    $('.form-control-chosen-required').chosen({
        allow_single_deselect: false,
        width: '100%'
    });
    $('.form-control-chosen-search-threshold-100').chosen({
        allow_single_deselect: true,
        disable_search_threshold: 100,
        width: '100%'
    });
    $('.form-control-chosen-optgroup').chosen({
        width: '100%'
    });

    $(function() {
        $('[title="clickable_optgroup"]').addClass('chosen-container-optgroup-clickable');
    });
    $(document).on('click', '[title="clickable_optgroup"] .group-result', function() {
        var unselected = $(this).nextUntil('.group-result').not('.result-selected');
        if(unselected.length) {
          unselected.trigger('mouseup');
      } else {
          $(this).nextUntil('.group-result').each(function() {
            $('a.search-choice-close[data-option-array-index="' + $(this).data('option-array-index') + '"]').trigger('click');
        });
      }
  });
</script>

</html>