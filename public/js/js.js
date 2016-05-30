// "use strict"

(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})

(jQuery); // end of jQuery name space

    
$(function(){
    $(".newUser").hide();
    
      $(".new").on("click", function(){
         $(".newUser").show();
         $(".loginUser").hide();
      });
    
      $(".login").on("click", function(){
         $(".newUser").hide();
         $(".loginUser").show();
      });
    });