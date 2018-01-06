function mouse_over(num) {
    $('li:eq(' + num + ')').addClass('active')
}

function mouse_leave(num) {
    $('li:eq(' + num + ')').removeClass('active')
}