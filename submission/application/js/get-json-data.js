$(document).ready(function(){
    // AJAX service request to get the main text data from the json data store
    $.getJSON('../application/model/data.json', function(jsonObj) {
        console.log(jsonObj);
        // Update the home page text with the JSON data
        $('#title_home').html('<h2>' + jsonObj.homePage.title + '<h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.homePage.subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.homePage.description + '</p>');
    });
});
