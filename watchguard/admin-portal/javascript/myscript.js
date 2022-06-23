function _view_menu() {
    $('.side-nav-div, .flash-out-div, .slide-back-div').fadeIn(500);
}

function _hide_menu() {
    $('.side-nav-div, .flash-out-div, .slide-back-div').fadeOut(500);
}



function _expand_link(divid) {
    $('#' + divid).toggle(300)
}
