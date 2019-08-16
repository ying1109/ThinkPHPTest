<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="btn-follow active follow">关注中1</div>
    <div class="btn-follow active follow">关注中2</div>
    <div class="btn-follow active follow">关注中3</div>
    <div class="btn-follow active follow">关注中4</div>
    <div class="btn-follow active follow">关注中5</div>
    <div class="btn-follow active follow">关注中6</div>
    <div class="btn-follow active follow">关注中7</div>
    <div class="btn-follow active follow">关注中8</div>
    <div class="btn-follow active follow">关注中9</div>
    <div class="btn-follow active follow">关注中10</div>
    <div class="btn-follow active follow">关注中11</div>
    <div class="btn-follow active follow">关注中12</div>
    <div class="btn-follow active follow">关注中13</div>
    <div class="btn-follow active follow">关注中14</div>
    <div class="btn-follow active follow">关注中15</div>
    <div class="btn-follow active follow">关注中16</div>
    <div class="btn-follow active follow">关注中17</div>
    <div class="btn-follow active follow">关注中18</div>
    <div class="btn-follow active follow">关注中19</div>
    <div class="btn-follow active follow">关注中20</div>
    <div class="btn-follow active follow">关注中21</div>
    <div class="btn-follow active follow">关注中22</div>
    <div class="btn-follow active follow">关注中23</div>
    <div class="btn-follow active follow">关注中24</div>
    <div class="btn-follow active follow">关注中25</div>
    <div class="btn-follow active follow">关注中26</div>
    <div class="btn-follow active follow">关注中27</div>
    <div class="btn-follow active follow">关注中28</div>
    <div class="btn-follow active follow">关注中29</div>
    <div class="btn-follow active follow">关注中30</div>
    <div class="btn-follow active follow">关注中31</div>
    <div class="btn-follow active follow">关注中32</div>
    <div class="btn-follow active follow">关注中33</div>
    <div class="btn-follow active follow">关注中34</div>
    <div class="btn-follow active follow">关注中35</div>
    <div class="btn-follow active follow">关注中36</div>
    <div class="btn-follow active follow">关注中37</div>
    <div class="btn-follow active follow">关注中38</div>
    <div class="btn-follow active follow">关注中39</div>
</body>

<script src="/Public/Admin/js/jquery-3.3.1.js"></script>
<script type="text/javascript">
    var h = $(window).height();
    setInterval(function(){
        console.log(h);
//        var h = $(document).height()-$(window).height();
        $(document).scrollTop(h);
//        $(document).scrollTop($(window).height());
//        $(".btn-follow").trigger('tap');
        h += $(window).height();
    },3000)

//    console.log($(document).height());
//    console.log($(window).height());
//    console.log($(document).height()-$(window).height());
</script>
</html>