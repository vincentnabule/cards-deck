function change_bg(a, b) {
    var currentImage = $('#' + a).attr('src');
    var nextImage = $('#' + b).attr('src');
    // console.log(currentImage + 'Next ' + nextImage);

    $('#' + a).attr('src', nextImage);
    $('#' + b).attr('src', currentImage);
}

function generate() {
    $.ajax({
        url: 'generate.php',
        method: 'GET',
        dataType: 'text',
        // data: {
        //     key: 'abc'
        // },
        success: function (response) {
            $('#data_here').empty();
            $('#data_here').append(response);
            console.log(response);
        }
    });
}