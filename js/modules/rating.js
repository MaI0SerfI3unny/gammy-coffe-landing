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

function getRatingById(elementId) {
    var rateYoInstance = $("#" + elementId).rateYo();
    var rating = rateYoInstance.rateYo("rating");

    return rating;
}

function setRatingById(elementId, newValue) {
    $("#" + elementId).rateYo("rating", newValue);
}

$(function () {
    createRateYo("form_rating", 0, "10px", false);
});

export { createRateYo, getRatingById, setRatingById };
