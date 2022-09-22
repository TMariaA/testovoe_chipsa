$(document).ready(function(){
    $(".button-sort").click(function (e){
        var order =$(this).data('sort');
        var type =$(this).data('method');
        $.ajax({
            url:location.href,
            method: 'post',
            data: {sort:order,method:type},
            success: function (data) {
                data = $(data);
                $('#refreshlist').html($("#refreshlist", data));
            }
        });
    });
});