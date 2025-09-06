$(function () {
    function createRateYo(containerId, rating, starWidth, boolRead=true) {
        $("#" + containerId).rateYo({
        rating: rating,
        normalFill: "transparent",
        ratedFill: "#00B78A",
        spacing: "4px",
        readOnly: boolRead,
        halfStar: true,
        isContentEditable: false,
        starWidth: starWidth,
        });
    }
    createRateYo("rating", 3.5, "24px");
    createRateYo("form_rating", 0, "10px", false);

    createRateYo("rating_user", 2, "10px");
    createRateYo("rating_user2", 5, "10px");
    createRateYo("rating_user3", 3, "10px");

    createRateYo("rating_comment_five", 5, "10px");
    createRateYo("rating_comment_four", 4, "10px");
    createRateYo("rating_comment_three", 3, "10px");
    createRateYo("rating_comment_two", 2, "10px");
    createRateYo("rating_comment_one", 1, "10px");
});