var len = 4;
var maxLen = 0;
var array = JSON.parse('<?php echo $images; ?>');

function getPhotos(arr) {
    if (arr.length !== 0) {
        for (var i = 0; i < 4; i++) {
            $("#photos").append('<div class="tile"><a data-fancybox="images" href="' + arr[i].path + '"><img class="tile-image" src="' + arr[i].path + '" alt=""><div class="descriptions">' + (arr[i].descriptions == null ? '' : arr[i].descriptions) + '</div></a></div>');
        }
    }
}

getPhotos(array);
$('#viewmore').on('click', function () {
    var newArr = [];
    $.ajax({
        url: '/get-new-photos',
        method: 'GET',
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            skip: len,
        },
        success: function (response) {
            newArr = JSON.parse(response);
            if (newArr.length !== 0) {
                len += 4;
                getPhotos(newArr);
            }
            else{
                this.hidden = true;
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        }
    });
})
