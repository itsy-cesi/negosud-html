hideLoader();
$(document).on("submit", "#contact", async function (e) {
  e.preventDefault();
  new Noty({
    type: "warning",
    layout: "topRight",
    text: "The contact form isn't connected to a smtp server, we can't send the mail for you",
  }).show();
});
