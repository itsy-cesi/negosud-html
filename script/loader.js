function hideLoader() {
  $("#loader").addClass("d-none");
  $("body").removeClass("overflow-hidden");
}
$.ajax({
  url: "/api/getToken.php",
  type: "POST",
  success: function (result) {
    $("#accountBtn").attr("href", result.token ? "/user" : "/account");
  },
});
