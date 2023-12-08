$(document).ready(function() {
    // Chargez le fichier JSON à l'aide de jQuery Ajax
    $.getJSON('/assets/Json/theDistrict.json', function(data) {

    // Affichez les plats
    var platsDiv = $('#plats');
    data.plat.forEach(function(plat) {
      if (plat.active === 'Yes') {
        // Créez la structure de la carte pour les plats
        var cardDiv = $('<div class="card m-3 col-lg-5 border border-black bg-beige mauve card-custom rounded-4"></div>'); // Utilisez la classe card-custom
        var cardRow = $('<div class="row g-0 bg-beige"></div>');
        var imageCol = $('<div class="col-md-4 col-lg-5 d-flex align-items-center justify-content-center"></div>'); // Utilisez les classes pour centrer verticalement et horizontalement
        var image = $('<img src="' + plat.image + '" class="card-img img-fluid" alt="' + plat.libelle + '">');
        var cardBodyCol = $('<div class="col-md-8 col-lg-7 h-100"></div>');
        var cardBody = $('<div class="card-body bg-beige rounded-end-5"></div>');
        var cardTitle = $('<h5 class="card-title fs-3">' + plat.libelle + '</h5>');
        var cardText = $('<p class="card-text scrollable-text h-100">' + plat.description + '</p>');
        var cardFooter = $('<div class="card-footer">'); // Utilisez la classe card-footer
        var cardPrice = $('<p class="card-text mb-0"><small class="text-black fs-6">Prix : ' + plat.prix + ' €</small></p>');
        var commanderButton = $('<button class="btn btn-outline-dark text-bg-mauve beige"><a href="commande.php" class="text-decoration-none beige">Commander</a></button>');

        // Ajoutez les éléments à la structure de la carte
      imageCol.append(image);
      cardBody.append(cardTitle);
      cardBody.append(cardText);
      cardBodyCol.append(cardBody);
      cardRow.append(imageCol);
      cardRow.append(cardBodyCol);
      cardDiv.append(cardRow);
      cardFooter.append(cardPrice);
      cardFooter.append(commanderButton);
      cardDiv.append(cardFooter);
      platsDiv.append(cardDiv);
      }
    });
  });
});