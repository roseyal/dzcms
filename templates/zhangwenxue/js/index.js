$(function() {
    (function() {
        var sup   = $(".industry"),
            inds  = sup.find(".mask"),
            links = inds.find("a"),
            abs   = inds.find('.abs');

        sup.hover(function() {
            inds.stop(false, true).fadeIn(500);
        }, function() {
            inds.stop().fadeOut(500);
        });

        links.hover(function(on, i) {
            on = $(this);
            i  = on.index();
            abs.stop().animate({'width':on.outerWidth(), 'left':on.position().left}, 200);
        });
    }());

});