$(function() {
    var $allMsg = $('#title');
    var $wordList = $('#title').html().split("");
    $('#title').html("");
    $.each($wordList, function(idx, elem) {
        var newEL = $("<span/>").text(elem).css({ opacity: 0 });
        newEL.appendTo($allMsg);
        newEL.delay(idx * 70);
        newEL.animate({ opacity: 1 }, 1100);
    });
});

/*
$(function() {
    var $allMsg = $('#bun');
    var $wordList = $('#bun').html().split("");
    $('#bun').html("");
    $.each($wordList, function(idx, elem) {
        var newEL = $("<span/>").text(elem).css({ opacity: 0 });
        newEL.appendTo($allMsg);
        newEL.delay(idx * 70);
        newEL.animate({ opacity: 1 }, 1100);
    });
});*/

