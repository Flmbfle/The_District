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