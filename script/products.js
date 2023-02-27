const listImage = [
  "6K4A0477_533x.jpg",
  "6K4A0483_533x.jpg",
  "6K4A0496_533x.jpg",
  "6K4A0507_533x.jpg",
  "6K4A0516_533x.jpg",
  "6K4A0534_533x.jpg",
  "6K4A0570_533x.jpg",
  "6K4A0814_533x.jpg",
  "6K4A0478_533x.jpg",
  "6K4A0489_533x.jpg",
  "6K4A0504_533x.jpg",
  "6K4A0513_533x.jpg",
  "6K4A0522_533x.jpg",
  "6K4A0536_533x.jpg",
  "6K4A0572_533x.jpg",
  "6K4A0829_533x.jpg",
  "6K4A0480_533x.jpg",
  "6K4A0493_533x.jpg",
  "6K4A0506_533x.jpg",
  "6K4A0514_533x.jpg",
  "6K4A0530_533x.jpg",
  "6K4A0550_533x.jpg",
  "6K4A0578_533x.jpg",
  "AmberBottleShop_ToutBu_Bottleneck_Fort_SOL_byTiesBemelmans-64copy_533x.jpg",
];

async function getProducts() {
  await $.get("http://195.154.113.18:8000/api/Produits/", function (response) {
    const products = response;
    $('div[name="products"]').html();
    products.forEach((product) => {
      const item = `
                    <a href="/product/${product.id}" class="col-lg-3 col-md-6 h-fit-content">
                        <div class="single-product position-relative">
                            <input type="hidden" name="region" value="${product.region}">
                            <input type="hidden" name="producer" value="${product.producteur}">
                            <input type="hidden" name="price" value="${product.prix_unitaire}">
                            <input type="hidden" name="id" value="${product.id}">
                            <img class="img-fluid w-100" src="/wines/6K4A0478_533x.jpg" alt="">
                            <div class="position-absolute bottom-0 left-0 p-3 w-100 d-flex justify-content-between">
                                <div>
                                    <h5>${product.nomProduit}</h5>
                                    <div class="price">
                                        <h6>${product.prix_unitaire}€</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    `;
      $('div[name="products"]').append(item);
    });
  });
}
async function getRegion() {
  const regionList = await [
    ...new Set(
      $('input[name="region"]')
        .map(function () {
          return $(this).val();
        })
        .get()
    ),
  ];
  await regionList.forEach((region) => {
    const item = `<div class="form-check"><input class="form-check-input" type="checkbox" id="${region}" name="region" value="${region}"><label for="${region}" class="form-check-label">${region}</label></div>`;
    $('div[name="regionList"]').append(item);
  });
}
function getProducer() {
  const producerList = [
    ...new Set(
      $('input[name="producer"]')
        .map(function () {
          return $(this).val();
        })
        .get()
    ),
  ];
  producerList.forEach((producer) => {
    const item = `<div class="form-check"><input class="form-check-input" type="checkbox" id="${producer}" name="producer" value="${producer}"><label for="${producer}" class="form-check-label">${producer}</label></div>`;
    $('div[name="producerList"]').append(item);
  });
}
function filter() {
  const regions = $('input[name="region"]:checked')
    .map(function () {
      return $(this).val();
    })
    .get();
  const producers = $('input[name="producer"]:checked')
    .map(function () {
      return $(this).val();
    })
    .get();
  $(".single-product").each(function () {
    $(this).parent().removeClass("d-none");

    const price = parseInt($(this).find(".price h6").html());

    const priceMin = $("#priceFilter .min").html();
    const priceMax = $("#priceFilter .max").html();

    const filters = [
      regions.length != 0 &&
        !regions.includes($(this).find('input[name="region"]').attr("value")),
      producers.length != 0 &&
        !producers.includes(
          $(this).find('input[name="producer"]').attr("value")
        ),
      price < priceMin || price > priceMax,
    ];
    console.log(filters);
    if (!filters.every((element) => element === false)) {
      $(this).parent().addClass("d-none");
    }
  });
}
async function makeFilter() {
  const priceArray = $(".price h6")
    .map(function () {
      return parseFloat($(this).html());
    })
    .get();
  console.log($(".price h6"));
  const minPrice = Math.floor(Math.min(...priceArray));
  const maxPrice = Math.ceil(Math.max(...priceArray));
  $("#slider-range").slider({
    range: true,
    min: minPrice,
    max: maxPrice,
    values: [minPrice, maxPrice],
    slide: function (event, ui) {
      $("#priceFilter .min").html(ui.values[0]);
      $("#priceFilter .max").html(ui.values[1]);
      filter();
    },
  });
  $("#priceFilter .min").html(minPrice);
  $("#priceFilter .max").html(maxPrice);
}
async function makePage() {
  await getProducts();
  await getRegion();
  await getProducer();
  await makeFilter();

  $("#loader").addClass("d-none");
  $("body").removeClass("overflow-hidden");
}

makePage();

$(document).ready(() => {
  $("#search-producer").keyup(function () {
    const search = $(this).val().toLowerCase();

    $("#search-producer + div div").removeClass("d-none");

    $(
      $("#search-producer + div div input").filter(function (index) {
        return !this.id.toLowerCase().match(search);
      })
    )
      .parent()
      .addClass("d-none");
  });

  $("#search-region").keyup(function () {
    const search = $(this).val().toLowerCase();

    $("#search-region + div div").removeClass("d-none");

    $(
      $("#search-region + div div input").filter(function (index) {
        return !this.id.toLowerCase().match(search);
      })
    )
      .parent()
      .addClass("d-none");
  });

  $(document).on("click", 'input[name="region"]', () => {
    filter();
  });
  $(document).on("click", 'input[name="producer"]', () => {
    filter();
  });
});
