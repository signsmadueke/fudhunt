"use strict";




//FOR THE PRODUCT INCREAMENT AND DECREAMENT
// Starts here

$('.plus').click(function () {
    changeValue(1);
});
$('.minus').click(function () {
    changeValue(-1);
});

function changeValue(val) {
    var container = $('.value');
    var current = parseInt(container.html(), 10);

    container.html(Math.max(0, current + val).toString());
}
// Ends here




//FOR THE ADD TO CART POPUP
// Starts here
// var modal = document.getElementById("addtocart-popup");
// var btn = document.getElementsByClassName("add-to-cart");
// var span = document.getElementsByClassName("close")[0];

// $(".add-to-cart").click(function () {
//     var $modal = $('#addtocart-popup');
//     $modal.addClass('active');
// });

// $(".close-popup").click(function () {
//     var $modal = $('#addtocart-popup');
//     $modal.removeClass('active');
// });

// window.onclick = function (event) {
//     if (event.target == modal) {
//         var $modal = $('#addtocart-popup');
//         $modal.removeClass('active');
//     }
// }
// Ends here





// FOR THE TABS
// Starts here
function openTab(evt, tabTitle) {
    // Declare all variables
    var i, tabcontent, tab;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // // Get all elements with class="tab" and remove the class "active"
    tab = document.getElementsByClassName("tab");
    for (i = 0; i < tab.length; i++) {
        tab[i].className = tab[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabTitle).style.display = "grid";
    evt.currentTarget.className += " active";
}
// Ends here




// This adds a padding bottom to the <body> tag so things don't go underneath the bottom menu
// Starts here
$('body.with-bottom-menu').css({
    'padding-bottom': $('#bottom-menu').height() + "px"
});
// Ends here





// // This adds a margin bottom to the .search-suggestions in the Discover page so it doesn't don't go underneath the bottom menu.
// Starts here
$('body.with-bottom-menu .search-sugestions').css({
    'margin-bottom': $('#bottom-menu').height() + "px"
});
// Ends here






// This helps to add a .searching class when the user clicks the search input box. the .searching class brings up the .search-suggestions popup.
// if the .searching class is removed, the search popup hides immediately
// Starts here
$('#search-input').focus(function () {
    $("body").addClass('searching');
});

// this closes the search popup
$('.close-search').click(function () {
    $("body").removeClass('searching');
});

// this also closes the popup when the esc button is pressed
$(document).keypress(function (e) {
    if (e.keyCode === 27) {
        $("body").removeClass('searching');
    }
});
// Ends here









// SVG EXTRACTOR STARTS
// THIS HELPS EXTRACT SVGS WHEN A WEBPAGE LOADS SO YOU CAN CHANGE THEIR COLORS OR CUSTOMIZE THEM

var pAgree = '1';

jQuery('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});

// SVG EXTRACTOR STOPS