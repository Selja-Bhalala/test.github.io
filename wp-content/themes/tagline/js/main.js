$(window).scroll(function(){
    if ($(window).scrollTop() >= 67) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});

$('.banner-bg .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    items:1
});

$('.casestudies-bg .owl-carousel').owlCarousel({
    loop: false,
    margin:60,
    nav:true,
    stagePadding: 250,
    // center: true,
    items:4,
    responsive:{
        0:{
            stagePadding: 30,
            margin:10,
            items:2
        },
        568:{
            stagePadding: 30,
            margin:10
        },
        769:{
            stagePadding: 50,
            margin:30,
            items:3
        },
        1025:{
            stagePadding: 150
        }
    }
});

$('.experience-bg .owl-carousel').owlCarousel({
    loop: false,
    margin: 15,
    nav:false,
    items:1
});

// $('.ourtechnologies-bg .owl-carousel').owlCarousel({
//     loop:true,
//     margin:0,
//     nav:false,
//     items:1
// });

$('.team-main .owl-carousel').owlCarousel({
    loop:false,
    margin: 15,
    nav:true,
    dots:false,
    items:4,
    navText: [
        '<span aria-label="' + 'Previous' + '"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,48.907,8.092,55.09,1.908,48.907,0,50.815l8.092,8.092,8.092-8.092Z" transform="translate(0 -48.907)"/> </svg></span>',
        '<span aria-label="' + 'Next' + '"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,10,8.092,3.817,1.908,10,0,8.092,8.092,0l8.092,8.092Z"/> </svg></span>'
    ],
    responsive:{
        0:{
            items:1
        },
        568:{
            items:2
        },
        769:{
            items:3
        },
        1199:{
            items:4
        }
    }
});

$('.portfolio-work.owl-carousel').owlCarousel({
    loop:true,
    margin: 30,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    items:4,
    navText: [
        '<span aria-label="' + 'Previous' + '"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,48.907,8.092,55.09,1.908,48.907,0,50.815l8.092,8.092,8.092-8.092Z" transform="translate(0 -48.907)"/> </svg></span>',
        '<span aria-label="' + 'Next' + '"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,10,8.092,3.817,1.908,10,0,8.092,8.092,0l8.092,8.092Z"/> </svg></span>'
    ],
    responsive:{
        0:{
            items:1
        },
        568:{
            items:1
        },
        769:{
            items:1
        },
        1199:{
            items:1
        }
    }
});


$('.career-slider.owl-carousel').owlCarousel({
    loop:true,
    margin: 30,
    nav:false,
    dots:false,
    autoplay:true,
    center: true,
    autoplayTimeout:3000,
    items:4,
    navText: [
        '<span aria-label="' + 'Previous' + '"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,48.907,8.092,55.09,1.908,48.907,0,50.815l8.092,8.092,8.092-8.092Z" transform="translate(0 -48.907)"/> </svg></span>',
        '<span aria-label="' + 'Next' + '"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,10,8.092,3.817,1.908,10,0,8.092,8.092,0l8.092,8.092Z"/> </svg></span>'
    ],
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        769:{
            items:3
        },
        1199:{
            items:4
        }
    }
});

$('.hamburger').click(function() {
    $('body').toggleClass('open');
});

$('#portfolio').mixitup({
    targetSelector: '.item',
    transitionSpeed: 450
});

// Checkbox checked and input disbaled when page loads
// $('.checkbox-toggle').prop('checked', false);
// $('#textInput').prop('disabled', false);

// Enable-Disable text input when checkbox is checked or unchecked

// $('.checkbox-toggle').change(function() {
//     if ($(this).val() == 'checked') {
//         $(this).is(':checked');   
//     }
// });

// $('.checkbox-toggle').change(function () {
//     $(this).is(':checked');
// });



var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};


var e = (new Skroll).add(".anim1", {
    animation: "slideInRight",
    delay: 80,
    duration: 800
}).add(".anim2", {
    animation: "slideInLeft",
    delay: 80,
    duration: 800
}).add(".anim3", {
    animation: "flipInY",
    delay: 80,
    duration: 800
}).add(".anim4", {
    animation: "fadeInUp",
    delay: 80,
    duration: 800
}).add(".anim5", {
    animation: "fadeInDown",
    delay: 80,
    duration: 800
}).add(".anim6", {
    animation: "zoomIn",
    delay: 80,
    duration: 800
}).init();
jQuery(window).load(function(a) {
    e.recalcPosition()
}), setInterval(function() {
    e.recalcPosition()
}, 2e3)


$(".background_bg").each(function() {
	var attr = $(this).attr('data-img-src');
	if (typeof attr !== typeof undefined && attr !== false) {
		$(this).css('background-image', 'url(' + attr + ')');
	}
});

$(window).on('scroll', function() {
    if ($(this).scrollTop() > 150) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});

$(".scrollup").on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 600);
    return false;
});

$('.features-of-daredrop.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.create-daredrop.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.completed-dares.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.order.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$("img").attr('draggable', false);

stickybits('.sidebar', { stickyBitStickyOffset: 100 });
