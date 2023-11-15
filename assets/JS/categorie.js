$(document).ready(function() {
  // Chargez le fichier JSON à l'aide de jQuery Ajax
  $.getJSON('/assets/Json/theDistrict.json', function(data) {
    // Affichez les catégories dans des groupes de 6
    var categories = data.categorie.filter(function(categorie) {
      return categorie.active === 'Yes';
    });

    // Divisez les catégories en groupes de 6
    var groupedCategories = [];
    while (categories.length > 0) {
      groupedCategories.push(categories.splice(0, 6));
    }

    // Affichez les groupes de catégories dans les diapositives correspondantes
    groupedCategories.forEach(function(group, index) {
      var categoriesDiv = $('#categories-' + (index + 1));
      group.forEach(function(categorie) {
        // Créez la structure de la carte simplifiée
        var cardDiv = $('<div class="card col-sm-7 col-md-6 col-lg-3 m-4 bg-beige mauve border border-black text-center fs-4"><a href""></div>');
        var image = $('<img src="' + categorie.image + '" class="card-img-top img-fluid" alt="' + categorie.libelle + '">');
        var cardBody = $('<div class="card-body p-2"></div>');
        var cardText = $('<span class="card-text">' + categorie.libelle + '</span>');

        // Ajoutez les éléments à la structure de la carte
        cardDiv.append(image);
        cardBody.append(cardText);
        cardDiv.append(cardBody);
        categoriesDiv.append(cardDiv);
      });
    });

    // Initialisez le carrousel une fois que les catégories sont chargées
    $('#carouselExample').carousel();
  });
});
