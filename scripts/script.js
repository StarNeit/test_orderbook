function changePlaceholder() {

}

$(window).resize( changePlaceholder ).trigger('resize');


$(document).ready(function(){
    $(".orders_menu .flex-sm-1").on("click", function () {
        $(".orders_menu .flex-sm-1").removeClass("active");
        $(this).addClass("active");
    });
});

$(window).scroll(function () {

    }
);