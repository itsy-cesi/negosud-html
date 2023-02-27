async function make() {
  productId = window.location.href.split("/").pop();

  await $.get(
    `http://195.154.113.18:8000/api/Produits/${productId}`,
    function (response) {
      $("#productImage").attr(
        "src",
        `http://127.0.0.1/wines/6K4A0480_533x.jpg`
      );
      $("#productProducer").html(response.producteur);
      $("#productName").html(response.nomProduit);
      $("#productPrice").html(response.prix_unitaire);
      $("#productTax").html(response.tva);
      $("#productDescription").html(response.description);
      $("#productAge").html(response.ancien);
      $("#productRegion").html(response.region);
      $("#productColor").html(response.couleur);
      $("#productAlcool").html(response.alcool);
      $("#productAlim").html(response.aliments);
      $("#productExp").html(response.expiration);
      $("#buy-it").attr("product-id", response.id);
    }
  );

  hideLoader();
}

make();
