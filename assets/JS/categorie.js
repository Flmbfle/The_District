$(document).ready(function() {

    $.ajax({
        url: '/assets/Json/theDistrict.json',
        dataType: 'json',
        success: function(data) {

            if (data.categorie) {
                var carouselInner = $('.carousel-inner');
                var categories = data.categorie.filter(function(categorie) {
                    return categorie.active.toLowerCase() === 'yes';
                });
                var numCategories = categories.length;

                for (var i = 0; i < numCategories; i += 6) {
                    var group = categories.slice(i, i + 6);
                    var groupHTML = '';
                    group.forEach(function(categorie, index) {
                        groupHTML += '<a href="/categorie.html">' +
                            '<img src="' + categorie.image + '" class="col-3 my-2 mx-5 rounded-4 zoom" title="' + categorie.libelle + '">' +
                            '</a>';
                    });

                    var categoryCard = $('<div class="carousel-item' + (i === 0 ? ' active' : '') + '">' + groupHTML + '</div>');

                    carouselInner.append(categoryCard);
                }
            } else {
                carouselInner.append('<div class="carousel-item active"><p>Aucune catégorie trouvée.</p></div>');
            }
        },
        error: function() {
            $('.carousel-inner').append('<div class="carousel-item active"><p>Erreur lors du chargement du fichier JSON.</p></div>');
        }
    });
});