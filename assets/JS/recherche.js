$(document).ready(function() {
    $('#searchInput').on('input', function() {
        var query = $(this).val();
        if (query.trim() !== '') {
            $.ajax({
                url: 'assets/Php/Recherche.php',
                method: 'POST',
                data: { query: query },
                success: function(response) {
                    $('#results').html(response);
                }
            });
        } else {
            $('#results').empty();
        }
    });


    $('#results').on('click', 'li', function() {

        alert('Vous avez cliqué sur : ' + plat);

    });
});