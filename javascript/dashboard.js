$( document ).ready(function() {
   $("#btn_sidebar").click(function(){
      $("#sidebar").addClass("-translate-x");
      $("#sidebar").removeClass("-translate-x-full");
      
   })
   $("#close_btn_side_bar").click(function(){
    $("#sidebar").removeClass("-translate-x");
    $("#sidebar").addClass("-translate-x-full");
   });
    
});
