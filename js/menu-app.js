$(document).ready(function (){
   $('.btn-navigation').click(function(){
      $(this).find('.barre').toggleClass('white');
      $('.navigation').toggleClass('isOpen');
      $('.container').toggleClass('opaque');
      $('.logo-bnb').toggleClass('opaque');
      $('.signature').toggleClass('opaque');
      $('.contact-pageheader').toggleClass('vide');
   })
});

$(".btn-telephone").hover(
   function(){
   $('.phonenumber').text("06 82 87 39 96");}, function () {
   $('.phonenumber').html('<a class="phonenumber">contact <span class="fas fa-phone"></span></a>');}
);

