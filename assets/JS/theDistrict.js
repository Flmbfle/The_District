$(document).ready(function() {
    function verif() {
        var envoi = true;

        // Réinitialisez les messages d'erreur et masquez-les au début de la validation
        $(".text-danger").text("").addClass("d-none");

        var nom = $("#exampleInputNom").val();
        var adresse = $("#exampleInputAdresse").val();
        var email = $("#exampleInputEmail").val();
        var conditionsAcceptees = $("#conditions").is(":checked");
        var telephone = $("#exampleInputTel").val();

        if (nom.length < 1) {
            envoi = false;
            $("#NomPrenomError").text("Votre nom doit comporter au moins 1 caractère.").removeClass("d-none");
        }
        if (adresse.length < 1) {
            envoi = false;
            $("#AdresseError").text("Veuillez entrer votre adresse.").removeClass("d-none");
        }
        if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
            envoi = false;
            $("#EmailError").text("L'adresse email n'est pas valide.").removeClass("d-none");
        }
        if (!/^(\+33|0)[1-9]( \d\d|\.(\d\d))*$/.test(telephone)) {
            envoi = false;
            $("#TelError").text("Le numéro fourni est incorrect").removeClass("d-none");
        }
        if (!conditionsAcceptees) {
            envoi = false;
            $("#ConditionError").text("Merci de bien vouloir accepter les conditions !").removeClass("d-none");
        }
        if (envoi) {
            alert("Formulaire soumis avec succès!");
            // Vous pouvez soumettre le formulaire ici ou effectuer d'autres actions.
        }
    }

    // Fonction pour effacer les messages d'erreur
    function effacerErreurs() {
        $(".text-danger").text("").addClass("d-none");
    }

    $("#btn_envoyer").click(function(e) {
        e.preventDefault();
        verif();
    });

    // Ajoutez un gestionnaire d'événements pour le bouton "Annuler"
    $("#btn_annuler").click(function() {
        effacerErreurs();
    });
});

 // Charger le fichier JSON
 const data = {
    "categorie": [
        {
            "id_categorie": 4,
            "libelle": "Pizza",
            "image": "pizza_cat.jpg",
            "active": "Yes"
        },
        // ... (d'autres catégories)
    ],
    "plat": [
        {
            "id_plat": 4,
            "libelle": "District Burger",
            "description": "Burger composé d'un bun's du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits.",
            "prix": 8,
            "image": "hamburger.jpg",
            "id_categorie": 5,
            "active": "Yes"
        },
        // ... (d'autres plats)
    ]
};

$(document).ready(function() {
    // Chargez le fichier JSON à l'aide de jQuery Ajax
    $.getJSON('/assets/Json/theDistrict.json', function(data) {
      // Affichez les catégories
      var categoriesDiv = $('#categories');
      data.categorie.forEach(function(categorie) {
        if (categorie.active === 'Yes') {
          // Créez la structure de la carte simplifiée
          var cardDiv = $('<div class="card col-md-3 m-3"></div>');
          var image = $('<img src="' + categorie.image + '" class="card-img-top img-fluid" alt="' + categorie.libelle + '">');
          var cardBody = $('<div class="card-body"></div>');
          var cardText = $('<p class="card-text">' + categorie.libelle + '</p>');
  
          // Ajoutez les éléments à la structure de la carte
          cardDiv.append(image);
          cardBody.append(cardText);
          cardDiv.append(cardBody);
          categoriesDiv.append(cardDiv);
        }
      });

    // Affichez les plats
    var platsDiv = $('#plats');
    data.plat.forEach(function(plat) {
      if (plat.active === 'Yes') {
        // Créez la structure de la carte pour les plats
        var cardDiv = $('<div class="card mb-3 col-md-5 mh-200 border-0 bg-beige"></div>');
        var cardRow = $('<div class="row g-0"></div>');
        var imageCol = $('<div class="col-md-4 d-flex align-items-center justify-content-center"></div>'); // Ajoutez des classes pour centrer verticalement
        var image = $('<img src="' + plat.image + '" class="img-fluid rounded-start h-100" alt="' + plat.libelle + '">'); // Ajoutez la classe "h-100" pour occuper toute la hauteur
        var cardBodyCol = $('<div class="col-md-8"></div>');
        var cardBody = $('<div class="card-body bg-beige rounded-end-5 border"></div>');
        var cardTitle = $('<h5 class="card-title">' + plat.libelle + '</h5>');
        var cardText = $('<p class="card-text">' + plat.description + '</p>');
        var cardPrice = $('<p class="card-text"><small class="text-muted">Prix : ' + plat.prix + ' €</small></p>');

        // Ajoutez les éléments à la structure de la carte
        imageCol.append(image);
        cardBody.append(cardTitle);
        cardBody.append(cardText);
        cardBody.append(cardPrice);
        cardBodyCol.append(cardBody);
        cardRow.append(imageCol);
        cardRow.append(cardBodyCol);
        cardDiv.append(cardRow);
        platsDiv.append(cardDiv);
      }
    });
  });
});