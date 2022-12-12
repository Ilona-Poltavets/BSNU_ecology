var len = 4;
var maxLen = 0;
var array = JSON.parse('<?php echo $images; ?>');
maxLen = array.length - 4;

function getPhotos() {
    var newHTML = [];
    for (var i = 0; i < len; i++) {
        newHTML.push('<a data-fancybox="images" href="' + array[i].path + '"><img class="tile" src="' + array[i].path + '" alt=""></a>');
    }
    $("#photos").html(newHTML.join(""));
}

getPhotos();
$('#viewmore').on('click', function () {
    if (maxLen - 4 < 0) {
        len = array.length;
        this.hidden = true;
    } else {
        len += 4;
        maxLen -= 4;
    }
    getPhotos();
})
