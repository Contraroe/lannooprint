(function($) {
    var len = $("#mask li").length;
    var x = 0;
    $("#mask #total").text(len);
    $("#mask li:eq(0)").addClass("current");
    $("#mask li").each(function() {
        $(this).attr('rel', x);
        x++
    });
    $("#next").click(function() {
        var current = $("#mask .current");
        var next = parseFloat(current.attr('rel'))+1;
        if(next==len) {
            return false;
        }
        $("#num").text(parseFloat(next)+1);
        current.removeClass('current');
        $("#mask li").each(function() {
            if($(this).attr('rel')==next) {
                $(this).addClass('current');
            }
        });
    });
    $("#prev").click(function() {
        var current = $("#mask .current");
        var prev = parseFloat(current.attr('rel'))-1;
        if(prev<0) {
            return false;
        }
        $("#num").text(parseFloat(prev)+1);
        current.removeClass('current');
        $("#mask li").each(function() {
            if($(this).attr('rel')==prev) {
                $(this).addClass('current');
            }
        });
    });
})(jQuery)
