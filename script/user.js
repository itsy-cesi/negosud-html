let token = null;
let adressesTable = null;
let addresses = null;
let commandesTable = null;
let commandes = null;
let facturesTable = null;
let factures = null;
async function make() {
  //get Token
  await $.ajax({
    url: "/api/getToken.php",
    type: "POST",
    success: function ({ token: userToken }) {
      if (!userToken) document.location = "/account";
      token = userToken;
    },
  });

  //get adresses
  await $.ajax({
    url: "http://195.154.113.18:8000/api/Adresses",
    type: "GET",
    headers: {
      accept: "text/plain",
      Authorization: `Bearer ${token}`,
    },
    success: function (response) {
      addresses = response;
      adressesTable = $("#adresses").DataTable({
        data: addresses,
        columns: [
          { title: "Rue", data: "rue" },
          { title: "Ville", data: "ville" },
          { title: "Zip", data: "codePostal" },
          { title: "Région", data: "region" },
          { title: "Pays", data: "pays" },
          {
            searchable: false,
            orderable: false,
            data: "id",
            render: function (data, type, row) {
              return `
              <a class="btn btn-danger" target="${data}" name="delete">Delete</a>
              `;
            },
          },
        ],
      });
    },
    error: function (error) {
      console.log(error);
    },
  });

  //get commandes
  await $.ajax({
    url: "http://195.154.113.18:8000/api/Commandes",
    type: "GET",
    headers: {
      accept: "text/plain",
      Authorization: `Bearer ${token}`,
    },
    success: function (response) {
      commandes = response;
      commandesTable = $("#commandes").DataTable({
        data: commandes,
        columns: [
          { title: "statut", data: "statut" },
          { title: "Date modification", data: "dateCommande" },
          { title: "Date commande", data: "dateModification" },
          {
            title: "Nombre elements",
            data: "elemCommandes.length",
            render: function (data, type, row) {
              return data;
            },
          },

        ],
      });
    },
    error: function (error) {
      console.log(error);
    },
  });

  //get Factures
  await $.ajax({
    url: "http://195.154.113.18:8000/api/Factures",
    type: "GET",
    headers: {
      accept: "text/plain",
      Authorization: `Bearer ${token}`,
    },
    success: function (response) {
      factures = response;
      facturesTable = $("#factures").DataTable({
        data: factures,
        columns: [
          { title: "Référence", data: "reference" },
          { title: "Date facturation", data: "dateCreation" },
          { title: "Date modification", data: "dateModification" },
          {
            title: "Total",
            data: "factureTotal",
          },

        ],
      });
    },
    error: function (error) {
      console.log(error);
    },
  });
}

$(document).ready(function () {
  make();
});

$("form#add_adresse").submit(function (e) {
  const form = $(this);
  e.preventDefault();

  $.ajax({
    url: "http://195.154.113.18:8000/api/Adresses",
    type: "POST",
    headers: {
      accept: "text/plain",
      Authorization: `Bearer ${token}`,
      "Content-Type": "application/json",
    },
    data: JSON.stringify({
      rue: $(form).find(`input[name="rue"]`).val(),
      ville: $(form).find(`input[name="ville"]`).val(),
      codePostal: $(form).find(`input[name="codePostal"]`).val(),
      region: $(form).find(`input[name="region"]`).val(),
      pays: $(form).find(`input[name="pays"]`).val(),
    }),
    success: function (response) {
      new Noty({
        type: "success",
        layout: "topRight",
        text: "Address added to user's profile",
      }).show();
      addresses = response;
      adressesTable.clear().draw();
      adressesTable.rows.add(addresses).draw();
      $(form).find(`input[name="rue"]`).val("");
      $(form).find(`input[name="ville"]`).val("");
      $(form).find(`input[name="codePostal"]`).val("");
      $(form).find(`input[name="region"]`).val("");
      $(form).find(`input[name="pays"]`).val("");
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(errorThrown);
    },
  });
});

$(document).on("click", 'a[name="delete"]', function () {
  $.ajax({
    url: "http://195.154.113.18:8000/api/Adresses/" + $(this).attr("target"),
    type: "DELETE",
    headers: {
      accept: "*/*",
      Authorization: "Bearer " + token,
    },
    success: function (response) {
      new Noty({
        type: "success",
        layout: "topRight",
        text: "Address deleted from user's profile",
      }).show();
      addresses = response;
      adressesTable.clear().draw();
      adressesTable.rows.add(addresses).draw();
    },
  });
});
