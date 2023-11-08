$(document).ready(function(){

var itemsPerPage = 5;
var pageCount = Math.ceil(plats.length / itemsPerPage);

var carouselInner = $('.carousel-inner');
for (var i = 0; i < pageCount; i++) {
    var activeClass = i === 0 ? 'active' : '';
    var cardHTML = `
        <div class="carousel-item ${activeClass}">
            <div class="row">
    `;

    for (var j = i * itemsPerPage; j < (i + 1) * itemsPerPage && j < plats.length; j++) {
        var plat = plats[j];
        cardHTML += `
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="/Assets/Img/food/${plat.image}" class="card-img-top" alt="${plat.libelle}">
                    <div class="card-body">
                        <h5 class="card-title">${plat.libelle}</h5>
                        <p class="card-text">${plat.description}</p>
                        <p class="card-price">Prix : ${plat.prix} €</p>
                        <a href="/Commande.html" class="btn btn-primary">Commander</a>
                    </div>
                </div>
            </div>
        `;
    }

    cardHTML += `
            </div>
        </div>
    `;

    carouselInner.append(cardHTML);
}
});