$(document).ready(function(){
    // AJAX service request to get the main text data from the json data store
    $.getJSON('../application/model/data.json', function(jsonObj) {
        console.log(jsonObj);
        // Update the home page text with the JSON data
        $('#title_home').html('<h2>' + jsonObj.homePage.title + '<h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.homePage.subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.homePage.description + '</p>');

        // Add the items to the homepage carousel
        for (let i = 0; i < jsonObj.homePage.carousel.length; i++) {
            let active = i === 0 ? "active" : "";
            let ariaCurrent = i === 0 ? "aria-current='true'" : "";

            // Add carousel content
            $('#homepageCarousel .carousel-inner').append(`<div class="carousel-item ${active}">
                            <div>
                                <h3>${jsonObj.homePage.carousel[i].title}</h3>
                                <p>${jsonObj.homePage.carousel[i].body}</p>
                                <a href="${jsonObj.homePage.carousel[i].link}" class="btn btn-primary">Find out more ...</a>
                            </div>
                        </div>`);

            // Add carousel page selector / indicator (at bottom)
            $('#homepageCarousel .carousel-indicators').append(`<button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="${i}" class="${active}" ${ariaCurrent} aria-label="Slide ${i}"></button>`);
        }
    });
});
