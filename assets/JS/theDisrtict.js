$(document).ready(function(){
    // Charger les données JSON
    var jsonData;
    $.getJSON('assets/Json/theDistrict.json', function(data) {
        jsonData = data;
        

        // Écouter les changements dans la barre de recherche
        $("#searchInput").on("input", function() {
            var searchTerm = $(this).val().toLowerCase();
            var results = [];

            // Parcourir les plats et vérifier s'ils correspondent à la recherche
            jsonData.plat.forEach(function(plat) {
                if (plat.libelle.toLowerCase().includes(searchTerm)) {
                    results.push(plat);
                }
            });

            // Afficher les résultats
            displayResults(results);
        });

        // Fonction pour afficher les résultats
        function displayResults(results) {
            var resultHtml = "";
        
            if (results.length > 0) {
                results.forEach(function (plat) {
                    var cardDiv = $('<div class="card mx-auto my-4 col-lg-8 border border-black bg-beige mauve card-custom rounded-4"></div>'); // Utilisez la classe card-custom
                    var cardRow = $('<div class="row g-0 bg-beige"></div>');
                    var imageCol = $('<div class="col-md-4 col-lg-5 d-flex align-items-center justify-content-center"></div>'); // Utilisez les classes pour centrer verticalement et horizontalement
                    var image = $('<img src="' + plat.image + '" class="card-img img-fluid" alt="' + plat.libelle + '">');
                    var cardBodyCol = $('<div class="col-md-8 col-lg-7 h-100"></div>');
                    var cardBody = $('<div class="card-body bg-beige rounded-end-5"></div>');
                    var cardTitle = $('<h5 class="card-title fs-3">' + plat.libelle + '</h5>');
                    var cardText = $('<p class="card-text scrollable-text h-100">' + plat.description + '</p>');
                    var cardFooter = $('<div class="card-footer">'); // Utilisez la classe card-footer
                    var cardPrice = $('<p class="card-text mb-0"><small class="text-black fs-6">Prix : ' + plat.prix + ' €</small></p>');
                    var commanderButton = $('<button class="btn btn-outline-dark text-bg-mauve beige">Commander</button>');
        
                    // Ajoutez les éléments à la carte
                    imageCol.append(image);
                    cardBody.append(cardTitle, cardText, cardFooter);
                    cardFooter.append(cardPrice, commanderButton);
                    cardBodyCol.append(cardBody);
                    cardRow.append(imageCol, cardBodyCol);
                    cardDiv.append(cardRow);
        
                    // Ajoutez la carte générée à la liste des résultats
                    resultHtml += cardDiv.prop('outerHTML');
                });
        
                // Masquer le reste du contenu de la page
                $(".content-to-hide").hide();
            } else {
                resultHtml = "<p>Aucun résultat trouvé.</p>";
        
                // Afficher le reste du contenu de la page
                $(".content-to-hide").show();
            }
        
            // Afficher les résultats dans la div dédiée
            $("#searchResults").html(resultHtml);
            
        }
    });
});

//CATEGORIE
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
            // Créez la structure de la carte simplifiée avec un lien hypertexte
            var cardLink = $('<a href="platsCategorie.php" class="card-link text-decoration-none"></a>');
            var cardDiv = $('<div class="card col-sm-7 col-md-6 col-lg-3 m-4 text-center fs-4 rounded-5 bg-beige border border-black border-2"></div>');
            var image = $('<img src="' + categorie.image + '" class="card-img-top img-fluid rounded-top-5" alt="' + categorie.libelle + '">');
            var cardBody = $('<div class="card-body p-2 "></div>');
            var cardText = $('<span class="card-text beige bg-mauve rounded-3 border border-black px-5 py-2">' + categorie.libelle + '</span>');
          
            // Ajoutez les éléments à la structure de la carte
            cardLink.append(image);
            cardBody.append(cardText);
            cardLink.append(cardBody);
            cardDiv.append(cardLink);
            categoriesDiv.append(cardDiv);
          });
          
          
      });
  
      // Initialisez le carrousel une fois que les catégories sont chargées
      $('#carouselExample').carousel();
    });
  });

  
$(document).ready(function() {
    // Chargez le fichier JSON à l'aide de jQuery Ajax
    $.getJSON('/assets/Json/theDistrict.json', function(data) {

// Affichez les plats
var platsDiv = $('#plats');
var nombrePlatsAffiches = 0; // Ajoutez un compteur

data.plat.forEach(function(plat) {
  if (nombrePlatsAffiches < 4 && plat.active === 'Yes') {
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

    nombrePlatsAffiches++; // Incrémentez le compteur
  }
    });
  });
});