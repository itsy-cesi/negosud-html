$.ajax({
  url: "/api/getToken.php",
  type: "POST",
  success: function (result) {
    if (result.token) document.location = "/user";
  },
});
$(document).on("submit", "#login-form", function (e) {
  e.preventDefault();

  $.ajax({
    url: "http://195.154.113.18:8000/api/Auth",
    type: "POST",
    headers: {
      accept: "*/*",
      "Content-Type": "application/json",
    },
    data: JSON.stringify({
      email: $(this).find('input[name="email"]').val(),
      motDePasse: $(this).find('input[name="password"]').val(),
    }),
    success: async function (response) {
      console.log("SUCCESS");
      console.log(
        await $.ajax({
          url: "/api/saveToken.php",
          type: "POST",
          data: {
            token: response.access_Token,
          },
          success: function () {
            document.location = "/";
          },
        })
      );
    },
    error: function (xhr, status, error) {
      new Noty({
        type: "error",
        layout: "topRight",
        text: xhr.responseText,
      }).show();
    },
  });
});
$(document).on("submit", "#register-form", function (e) {
  e.preventDefault();
  $.ajax({
    url: "http://195.154.113.18:8000/api/Utilisateurs",
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify({
      nomUtilisateur: $(this).find('input[name="nomUtilisateur"]').val(),
      nom: $(this).find('input[name="nom"]').val(),
      prenom: $(this).find('input[name="prenom"]').val(),
      email: $(this).find('input[name="email"]').val(),
      tel: $(this).find('input[name="tel"]').val(),
      motDePasse: $(this).find('input[name="motDePasse"]').val(),
      isBusiness: $(this).find('input[name="siren"]').val().length != 0,
      siren: $(this).find('input[name="siren"]').val(),
    }),
    success: function (data) {
      new Noty({
        type: "success",
        layout: "topRight",
        text: "Account created",
      }).show();
      $("#accountForm").carousel(0);
    },
    error: function (xhr, status, error) {
      new Noty({
        type: "success",
        layout: "topRight",
        text: "An error occured, please retry in few minutes",
      }).show();
    },
  });
});
