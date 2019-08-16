function disabledClick() {
    $(".btn").attr({"disabled":"disabled"});     //控制按钮为禁用

    var second = 10;
    $(".btn").text(second + '秒后点击');
    var intervalObj = setInterval(function () {
        second--;
        $(".btn").text(second + '秒后点击');
        if(second == 0){
            $(".btn").text('提交');
            $(".btn").removeAttr("disabled");//将按钮可用
            /* 清除已设置的setInterval对象 */
            clearInterval(intervalObj);
        }
    }, 1000 );
}