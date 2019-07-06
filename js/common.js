"use strict";
//open mobile menu
$(document).ready(function(){
    var showMenu = false;
    $('.burger').click(function(){
        showMenu = !showMenu;
        if(showMenu){
            $('.header').css({
                'display':'flex',
            });
            $('.burger span:nth-child(2)').css({
                'display':'none'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'rotate(45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
            $('.burger span:nth-child(3)').css({
                'transform':'rotate(-45deg)',
                'position':'absolute',
                'top':'50%',
                'transition':'0.2s'
            });
        }else{
            $('.header').css({
                'display':'none',
            });
            $('.burger span:nth-child(2)').css({
                'display':'block'
            });
            $('.burger span:nth-child(1)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'

            });
            $('.burger span:nth-child(3)').css({
                'transform':'none',
                'position':'static',
                'transition':'0.2s'
            });
        }
    });
});
//open modal window
$(document).ready(function(){
    $('.btn--modal').click(function () {
        $('.modal').css({'display':'flex'});
    })
});
//close modal window
$(document).ready(function(){
  $('.modal .close').click(function () {
        $('.modal').css({'display':'none'});
  })
});
//active link
$(function () {
    $(".nav_list li a").each(function () {
        window.location.href == this.href && $(this).addClass("active");
    })
});

//change color for special page
$(document).ready(function () {
   let active = $('.active');
   let border = $('.change_border');
   let borderNoHover = $('.change_border-no_hover');
   let colorText = $('.change_color');
   let fill = $('.change_fill');
   let fillNoHover = $('.change_fill-no_hover');
   let btnBlackText = $('.btn--black');
   let sliderBullet = $('.swiper-pagination-bullet-active');
   let social = $('.social-svg-icon');
   let arrow = $('.slider-arrow');

   let dizajnProekt = '/dizajn-proekt/';
   let demontazhnyeRaboty = '/demontazhnye-raboty/';
   let santehnicheskieRaboty = '/santehnicheskie-raboty/';
   let elektromontazhnyeRaboty = '/elektromontazhnye-raboty/';
   let otdelochnyeRaboty = '/otdelochnye-raboty/';
   let natyazhnyePotolki = '/natyazhnye-potolki/';
   let kliningovyeRaboty = '/kliningovye-raboty/';

   let dizajnProektColor = '#f15a24';
   let demontazhnyeRabotyColor = '#000000';
   let santehnicheskieRabotyColor = '#29abe2';
   let elektromontazhnyeRabotyColor = '#ff0000';
   let otdelochnyeRabotyColor = '#a3897a';
   let natyazhnyePotolkiColor = '#b3b3b3';
   let kliningovyeRabotyColor = '#0071bc';
   let defaultColor = '#f1592a';

   let dizajnProektLogo = 'dizajnProekt';
   let demontazhnyeRabotyLogo = 'demontazhnyeRaboty';
   let santehnicheskieRabotyLogo = 'santehnicheskieRaboty';
   let elektromontazhnyeRabotyLogo = 'elektromontazhnyeRaboty';
   let otdelochnyeRabotyLogo = 'otdelochnyeRaboty';
   let natyazhnyePotolkiLogo = 'natyazhnyePotolki';
   let kliningovyeRabotyLogo = 'kliningovyeRaboty';
   let defaultLogo = 'default';

   function change(color){
       active.css({color: color});
       border.css({border: '1px solid ' + color});
       borderNoHover.css({border: '1px solid ' + color});
       border.hover(function () {
           $(this).css({
               backgroundColor: color,
               color: '#fff',
           })
       }, function () {
           $(this).css({backgroundColor: '#fff', color: color});
       });
       btnBlackText.hover(function () {
           $(this).css({
               backgroundColor: color,
               color: '#fff',
           })
       }, function () {
           $(this).css({backgroundColor: '#fff', color: '#000'});
       });
       colorText.css({color: color});
       fill.css({backgroundColor: color});
       fillNoHover.css({backgroundColor: color});
       fill.hover(function () {
           $(this).css({
               backgroundColor: '#fff',
               border: '1px solid' + color,
               color: color,
           })
       }, function () {
           $(this).css({backgroundColor: color, color: '#fff'});
       });
       social.hover(function () {
           $(this).css({fill: color});
       }, function () {
           $(this).css({fill: '#000'})
       });
       arrow.css({fill: color});
   }

   function changeLogo(logo) {
       let logoBox = $('.header .logo');
       let imgSrc = 'url("/wp-content/themes/druzhina/img/logos/' + logo + '.svg")';
       logoBox.css({'backgroundImage': imgSrc});
   }

   switch (window.location.pathname) {
       case dizajnProekt:
           change(dizajnProektColor);
           changeLogo(dizajnProektLogo);
           return;
       case demontazhnyeRaboty:
           change(demontazhnyeRabotyColor);
           changeLogo(demontazhnyeRabotyLogo);
           return;
       case santehnicheskieRaboty:
           change(santehnicheskieRabotyColor);
           changeLogo(santehnicheskieRabotyLogo);
           return;
       case elektromontazhnyeRaboty:
           change(elektromontazhnyeRabotyColor);
           changeLogo(elektromontazhnyeRabotyLogo);
           return;
       case otdelochnyeRaboty:
           change(otdelochnyeRabotyColor);
           changeLogo(otdelochnyeRabotyLogo);
           return;
       case natyazhnyePotolki:
           change(natyazhnyePotolkiColor);
           changeLogo(natyazhnyePotolkiLogo);
           return;
       case kliningovyeRaboty:
           change(kliningovyeRabotyColor);
           changeLogo(kliningovyeRabotyLogo);
           return;
       default:
           change(defaultColor);
           changeLogo(defaultLogo);
           return;
   }
});