jQuery( document ).ready(function($) {
    // Detect objectFit support
    if('objectFit' in document.documentElement.style === false) {

        // assign HTMLCollection with parents of images with objectFit to variable
        var container = document.getElementsByClassName('object-fit__container');

        // Loop through HTMLCollection
        for(var i = 0; i < container.length; i++) {

            // Asign image source to variable
            var imageSource = container[i].querySelector('img').src;

            // Hide image
            container[i].querySelector('img').style.display = 'none';

            // Add background-size: cover
            container[i].style.backgroundSize = 'cover';

            // Add background-image: and put image source here
            container[i].style.backgroundImage = 'url(' + imageSource + ')';

            // Add background-position: center center
            container[i].style.backgroundPosition = 'center center';
        }
    }

    if (/MSIE 10/i.test(navigator.userAgent)) {
        // This is internet explorer 10
        $(".object-fit__container img").remove();
    }

    if (/MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent)) {
        // This is internet explorer 9 or 11
        $(".object-fit__container img").remove();
    }

    if (/Edge\/\d./i.test(navigator.userAgent)){
        // This is Microsoft Edge
        // $(".object-fit__container img").remove();
    }
});
