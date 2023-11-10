$(document).ready(function() {
    // Chargez le fichier JSON à l'aide de jQuery Ajax
    $.getJSON('/assets/Json/theDistrict.json', function(data) {
      // Affichez les catégories
      var categoriesDiv = $('#categories');
      data.categorie.forEach(function(categorie) {
        if (categorie.active === 'Yes') {
          // Créez la structure de la carte simplifiée
          var cardDiv = $('<div class="card col-md-3 m-4 bg-beige mauve border border-black text-center fs-4"></div>');
          var image = $('<img src="' + categorie.image + '" class="card-img-top img-fluid" alt="' + categorie.libelle + '">');
          var cardBody = $('<div class="card-body p-2"></div>');
          var cardText = $('<span class="card-text">' + categorie.libelle + '</span>');
  
          // Ajoutez les éléments à la structure de la carte
          cardDiv.append(image);
          cardBody.append(cardText);
          cardDiv.append(cardBody);
          categoriesDiv.append(cardDiv);
        }
      });
    });
});