$( document ).ready(function() {
  if (screen.width <= 980) {
    $("a.waitinglist-signup").hide();
    var nid = $("input#mailing-list-id").val();
    var newLink = $("<a />", {
        name : "link",
        href : "/signup/mailinglist/" + nid,
        text : "Join waiting list",
        class : "btn btn-alt",
    });
    $("a.waitinglist-signup").after(newLink);
  }
});
