$(document).ready(function(){
    $('.db-dropdown a').click(function () {
        $(this).parent('li').toggleClass('open');
        $(this).parent('li').siblings().removeClass('open');
    })



    $('.datepicker').datepicker();

    $(document).mouseup(function (e) {
        if ($('.db-dropdown-menu').has(e.target).length === 0)
        {
            $('.db-dropdown-menu').css('display', 'none');
        }
    });

    $('a[data-toggle="db-dropdown"]').click(function () {
        $('.db-dropdown-menu').toggle();
    });
})

