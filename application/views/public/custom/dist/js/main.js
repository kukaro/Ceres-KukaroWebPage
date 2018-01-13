function mouse_over(num) {
    $('li:eq(' + num + ')').addClass('active')
}

function mouse_leave(num) {
   $('li:eq(' + num + ')').removeClass('active')
}

function gender_click() {
    var element = $('input[name=signUpGender]').val();
    if(element != '남자'){
        $('input[name=signUpGender]').val('남자');
    }
    else{
        $('input[name=signUpGender]').val('여자');
    }
}

$(document).ready(function () {
    var sw;
    $('.dropdown-submenu a.dropdown-submenu-toggle').on("mouseover", function (e) {
        if (sw != undefined) {
            sw = sw.toggle();
        }
        sw = $(this).next('ul');
        sw.toggle();
        e.stopPropagation();
        e.preventDefault();
    });
    $('ul.dropdown-menu.inverse-dropdown').on("mouseleave", function (e) {
        if (sw != undefined) {
            sw = sw.toggle();
        }
        sw = $(this).next('ul');
        sw.toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});