$(document).ready(function(){
    $('.db-dropdown a').click(function () {
        $(this).parent('li').toggleClass('open');
        $(this).parent('li').siblings().removeClass('open');
    })

    $('a[data-toggle="db-dropdown"]').click(function (e) {
        e.stopPropagation();
        $(this).next('.db-dropdown-menu').toggle();
    })
})

