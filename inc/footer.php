<footer class="bg-dark">
    <div class="text-center mx-auto text-light">
        <small>
            <?= date('Y') ?> Copyright. <br>V.O.N
        </small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
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
            success: function(response) {
                $('#data_here').empty();
                $('#data_here').append(response);
                   console.log(response);
            }
        });
    }
</script>
</body>

</html>