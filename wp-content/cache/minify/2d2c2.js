Skroll=function(t){var n=jQuery.extend({mobile:!1},t),a=this;this.elements=[],this.inViewport=function(t,n){var a=jQuery(window),s=t.data("skrollData").offset.top,e=s+t.outerHeight(),i=a.scrollTop()+a.height()*n.triggerTop,o=a.scrollTop()+a.height()*n.triggerBottom;return e>i&&s<o},this.getScrollStatus=function(t,n){return this.inViewport(t,n)?(t.data("skrollData").inView=!0,{action:"enter",data:t.data("skrollData")}):t.data("skrollData").inView?(t.data("skrollData").inView=!1,{action:"leave",data:t.data("skrollData")}):{action:"idle",data:t.data("skrollData")}},this.add=function(t,n){var s=jQuery.extend({triggerTop:.2,triggerBottom:.8,delay:0,duration:500,animation:"zoomIn",easing:"ease",wait:0,repeat:!1,onEnter:!1,onLeave:!1},n);return a.elements.push({element:t,settings:s}),a},this.recalcPosition=function(){jQuery.each(a.elements,function(t,n){jQuery(n.element).each(function(t,n){var a=jQuery(n);if(!a.data("skrollData").shown){var s=a.css("transform");a.css("transform","none"),a.data("skrollData").offset=a.offset(),a.css("transform",s)}})})},this.throttle=function(t,n,a){var s,e;return n||(n=250),function(){var i=a||this,o=+new Date,r=arguments;s&&o<s+n?(clearTimeout(e),e=setTimeout(function(){s=o,t.apply(i,r)},n)):(s=o,t.apply(i,r))}},this.addAnimation=function(t,n){return a.animations[t]=n,a},this.init=function(){return!n.mobile&&jQuery(window).width()<600?a:(jQuery.each(a.elements,function(t,n){jQuery(n.element).each(function(t,s){jQuery(s).data("skrollData",{inView:!1,shown:!1,offset:jQuery(s).offset()}),"string"==typeof n.settings.animation&&"none"!=n.settings.animation?(a.animations[n.settings.animation]||(console.warn("The requested animation '%s' was not found switching to default zoomIn",n.settings.animation),console.trace(),n.settings.animation="zoomIn"),a.animations[n.settings.animation].start(s)):"object"==typeof n.settings.animation&&null!=n.settings.animation.start&&n.settings.animation.start(s)})}),jQuery(window).on("resize scroll",this.throttle(function(){jQuery.each(a.elements,function(t,n){var s=n.settings.wait;jQuery(n.element).each(function(t,e){var i=jQuery(e),o=a.getScrollStatus(i,n.settings);"idle"!=o.action&&("enter"!=o.action||o.data.shown?"leave"==o.action&&o.data.shown&&n.settings.repeat&&("string"==typeof n.settings.animation&&"none"!=n.settings.animation?a.animations[n.settings.animation]&&i.css("transition","all "+n.settings.duration+"ms "+n.settings.easing).delay(s).queue(function(t){a.animations[n.settings.animation].start(e),i.data("skrollData").shown=!1,t()}):"object"==typeof n.settings.animation&&null!=n.settings.animation.end&&i.css("transition","all "+n.settings.duration+"ms "+n.settings.easing).delay(s).queue(function(t){n.settings.animation.start(e),i.data("skrollData").shown=!1,t()}),s+=n.settings.delay):("string"==typeof n.settings.animation&&"none"!=n.settings.animation?i.css("transition","all "+n.settings.duration+"ms "+n.settings.easing).delay(s).queue(function(t){a.animations[n.settings.animation].end(e),i.data("skrollData").shown=!0,t()}):"object"==typeof n.settings.animation&&null!=n.settings.animation.end&&i.css("transition","all "+n.settings.duration+"ms "+n.settings.easing).delay(s).queue(function(t){n.settings.animation.end(e),i.data("skrollData").shown=!0,t()}),s+=n.settings.delay),"enter"==o.action?n.settings.onEnter&&n.settings.onEnter(t,e):"leave"==o.action&&n.settings.onLeave&&n.settings.onLeave(t,e))})})},150)),jQuery(window).scroll(),jQuery(window).resize(this.recalcPosition()),a)},this.animations={zoomIn:{start:function(t){jQuery(t).css({transform:"scale(.1,.1)",opacity:0})},end:function(t){jQuery(t).css({transform:"scale(1,1)",opacity:1})}},fadeInLeft:{start:function(t){jQuery(t).css({transform:"translate(-50%,0)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0)",opacity:1})}},fadeInRight:{start:function(t){jQuery(t).css({transform:"translate(50%,0)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0)",opacity:1})}},fadeInLeftBig:{start:function(t){jQuery(t).css({transform:"translate(-100%,0)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0)",opacity:1})}},fadeInRightBig:{start:function(t){jQuery(t).css({transform:"translate(100%,0)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0)",opacity:1})}},fadeInUp:{start:function(t){jQuery(t).css({transform:"translate(0,50%)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0)",opacity:1})}},fadeInDown:{start:function(t){jQuery(t).css({transform:"translate(0,-50%)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0)",opacity:1})}},slideInLeft:{start:function(t){jQuery(t).css({transform:"translate(-50%,0) scale(.8,.8)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0) scale(1,1)",opacity:1})}},slideInLeftBig:{start:function(t){jQuery(t).css({transform:"translate(-100%,0) scale(.8,.8)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0) scale(1,1)",opacity:1})}},slideInRight:{start:function(t){jQuery(t).css({transform:"translate(50%,0) scale(.8,.8)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0) scale(1,1)",opacity:1})}},slideInRightBig:{start:function(t){jQuery(t).css({transform:"translate(-100%,0) scale(.8,.8)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0) scale(1,1)",opacity:1})}},flipInX:{start:function(t){jQuery(t).css({transform:"rotateX(90deg)",opacity:0})},end:function(t){jQuery(t).css({transform:"rotateX(0deg)",opacity:1})}},flipInY:{start:function(t){jQuery(t).css({transform:"rotateY(90deg)",opacity:0})},end:function(t){jQuery(t).css({transform:"rotateY(0deg)",opacity:1})}},rotateRightIn:{start:function(t){jQuery(t).css({transform:"rotate(45deg)",transformOrigin:"0 100%",opacity:0})},end:function(t){jQuery(t).css({transform:"rotate(0deg)",opacity:1})}},rotateLeftIn:{start:function(t){jQuery(t).css({transform:"rotate(-45deg)",transformOrigin:"0 100%",opacity:0})},end:function(t){jQuery(t).css({transform:"rotate(0deg)",opacity:1})}},growInLeft:{start:function(t){jQuery(t).css({transform:"translate(-100%,0) scale(.1,.1)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0) scale(1,1)",opacity:1})}},growInRight:{start:function(t){jQuery(t).css({transform:"translate(100%,0) scale(.1,.1)",opacity:0})},end:function(t){jQuery(t).css({transform:"translate(0,0) scale(1,1)",opacity:1})}}}};;$(window).scroll(function(){if($(window).scrollTop()>=67){$('header').addClass('fixed-header');}
else{$('header').removeClass('fixed-header');}});$('.banner-bg .owl-carousel').owlCarousel({loop:true,margin:0,nav:true,items:1});$('.casestudies-bg .owl-carousel').owlCarousel({loop:false,margin:60,nav:true,stagePadding:250,items:4,responsive:{0:{stagePadding:30,margin:10,items:2},568:{stagePadding:30,margin:10},769:{stagePadding:50,margin:30,items:3},1025:{stagePadding:150}}});$('.experience-bg .owl-carousel').owlCarousel({loop:false,margin:15,nav:false,items:1});$('.team-main .owl-carousel').owlCarousel({loop:false,margin:15,nav:true,dots:false,items:4,navText:['<span aria-label="'+'Previous'+'"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,48.907,8.092,55.09,1.908,48.907,0,50.815l8.092,8.092,8.092-8.092Z" transform="translate(0 -48.907)"/> </svg></span>','<span aria-label="'+'Next'+'"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,10,8.092,3.817,1.908,10,0,8.092,8.092,0l8.092,8.092Z"/> </svg></span>'],responsive:{0:{items:1},568:{items:2},769:{items:3},1199:{items:4}}});$('.portfolio-work.owl-carousel').owlCarousel({loop:true,margin:30,nav:false,dots:false,autoplay:true,autoplayTimeout:3000,items:4,navText:['<span aria-label="'+'Previous'+'"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,48.907,8.092,55.09,1.908,48.907,0,50.815l8.092,8.092,8.092-8.092Z" transform="translate(0 -48.907)"/> </svg></span>','<span aria-label="'+'Next'+'"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,10,8.092,3.817,1.908,10,0,8.092,8.092,0l8.092,8.092Z"/> </svg></span>'],responsive:{0:{items:1},568:{items:1},769:{items:1},1199:{items:1}}});$('.career-slider.owl-carousel').owlCarousel({loop:true,margin:30,nav:false,dots:false,autoplay:true,center:true,autoplayTimeout:3000,items:4,navText:['<span aria-label="'+'Previous'+'"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,48.907,8.092,55.09,1.908,48.907,0,50.815l8.092,8.092,8.092-8.092Z" transform="translate(0 -48.907)"/> </svg></span>','<span aria-label="'+'Next'+'"><svg xmlns="http://www.w3.org/2000/svg" width="16.183" height="10" viewBox="0 0 16.183 10"> <path id="Path_3" data-name="Path 3" d="M14.275,10,8.092,3.817,1.908,10,0,8.092,8.092,0l8.092,8.092Z"/> </svg></span>'],responsive:{0:{items:1},480:{items:2},769:{items:3},1199:{items:4}}});$('.hamburger').click(function(){$('body').toggleClass('open');});$('#portfolio').mixitup({targetSelector:'.item',transitionSpeed:450});var TxtType=function(el,toRotate,period){this.toRotate=toRotate;this.el=el;this.loopNum=0;this.period=parseInt(period,10)||2000;this.txt='';this.tick();this.isDeleting=false;};TxtType.prototype.tick=function(){var i=this.loopNum%this.toRotate.length;var fullTxt=this.toRotate[i];if(this.isDeleting){this.txt=fullTxt.substring(0,this.txt.length-1);}else{this.txt=fullTxt.substring(0,this.txt.length+1);}
this.el.innerHTML='<span class="wrap">'+this.txt+'</span>';var that=this;var delta=200-Math.random()*100;if(this.isDeleting){delta/=2;}
if(!this.isDeleting&&this.txt===fullTxt){delta=this.period;this.isDeleting=true;}else if(this.isDeleting&&this.txt===''){this.isDeleting=false;this.loopNum++;delta=500;}
setTimeout(function(){that.tick();},delta);};window.onload=function(){var elements=document.getElementsByClassName('typewrite');for(var i=0;i<elements.length;i++){var toRotate=elements[i].getAttribute('data-type');var period=elements[i].getAttribute('data-period');if(toRotate){new TxtType(elements[i],JSON.parse(toRotate),period);}}
var css=document.createElement("style");css.type="text/css";css.innerHTML=".typewrite > .wrap { border-right: 0.08em solid #fff}";document.body.appendChild(css);};var e=(new Skroll).add(".anim1",{animation:"slideInRight",delay:80,duration:800}).add(".anim2",{animation:"slideInLeft",delay:80,duration:800}).add(".anim3",{animation:"flipInY",delay:80,duration:800}).add(".anim4",{animation:"fadeInUp",delay:80,duration:800}).add(".anim5",{animation:"fadeInDown",delay:80,duration:800}).add(".anim6",{animation:"zoomIn",delay:80,duration:800}).init();jQuery(window).load(function(a){e.recalcPosition()}),setInterval(function(){e.recalcPosition()},2e3)
$(".background_bg").each(function(){var attr=$(this).attr('data-img-src');if(typeof attr!==typeof undefined&&attr!==false){$(this).css('background-image','url('+attr+')');}});$(window).on('scroll',function(){if($(this).scrollTop()>150){$('.scrollup').fadeIn();}else{$('.scrollup').fadeOut();}});$(".scrollup").on('click',function(e){e.preventDefault();$('html, body').animate({scrollTop:0},600);return false;});$('.features-of-daredrop.owl-carousel').owlCarousel({loop:true,margin:10,nav:true,autoplay:true,responsive:{0:{items:1},600:{items:1},1000:{items:1}}});$('.create-daredrop.owl-carousel').owlCarousel({loop:true,margin:10,nav:true,autoplay:true,responsive:{0:{items:1},600:{items:1},1000:{items:1}}});$('.completed-dares.owl-carousel').owlCarousel({loop:true,margin:10,nav:true,autoplay:true,responsive:{0:{items:1},600:{items:1},1000:{items:1}}});$('.order.owl-carousel').owlCarousel({loop:true,margin:10,nav:true,autoplay:true,responsive:{0:{items:1},600:{items:1},1000:{items:1}}});$("img").attr('draggable',false);stickybits('.sidebar',{stickyBitStickyOffset:100});