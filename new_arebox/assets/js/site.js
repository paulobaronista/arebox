$(document).ready(function(){

      //EVENTO TELEFONE
      $("#alphaPhone").on("click", function() {
       $("#alphaPhone p").html("Atendimento: (11) 4787-3828");
       return false;
      });

      $("#alphaPhoneAgua").on("click", function() {
       $("#alphaPhoneAgua p").html("Atendimento: (11) 4786-4170");
       return false;
      });

      // ATENDIMENTO ONLINE
      function move_box() {
       var offset = 150; // set offset (likely equal to your css top)
       var element = document.getElementById('fixed_div');
       element.style.top = (window.pageYOffset + offset) + 'px';
      }
      window.setInterval(move_box, 0);

 });
