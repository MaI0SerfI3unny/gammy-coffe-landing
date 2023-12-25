import { getRatingById, setRatingById } from './rating.js';

async function createComment(data) {
    const url = 'send.php';
    const request = await fetch(url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
    })
    const response = await request.json();

    return response
}

$(document).ready(function () {
    $("#btnCreateComment").on("click", async function () {
      var name_value = $("#name_comment").val();
      var surname_value = $("#surname_comment").val();
      var text_value = $("#text_comment").val();
      var rating_user = getRatingById("form_rating");

      if(!name_value.trim().length)
      {
        $("#name_err").css("display", "block");
      }else{
        $("#name_err").css("display", "none");
      }

      if(!surname_value.trim().length)
      {
        $("#surname_err").css("display", "block");
      }else{
        $("#surname_err").css("display", "none");
      }

      if(!text_value.trim().length)
      {
        $("#text_err").css("display", "block");
      }else{
        $("#text_err").css("display", "none");
      }

      if(!rating_user)
      {
        $("#rate_err").css("display", "block");
      }else{
        $("#rate_err").css("display", "none");
      }

      if (name_value.trim().length && 
          surname_value.trim().length &&
          text_value.trim().length &&
          rating_user) {
            await createComment({
              name: name_value, 
              surname: surname_value, 
              message: text_value, 
              mark: rating_user
          })
            setRatingById("form_rating", 0)
            $("#name_comment").val("");
            $("#surname_comment").val("");
            $("#text_comment").val("");
            $("#succ_form").css("display", "block");
                var scrollPosition = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
                window.location.reload(true);
                window.onload = function() {
                  window.scrollTo(0, scrollPosition);
                }
          }
    });
});