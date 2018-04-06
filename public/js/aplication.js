$(document).ready(function(){
   $('#language-set p').on('click', function(){
      var languageItems = $('#language-set p');
       for(var i = 0; i < languageItems.length; i++){
           $(languageItems[i]).removeClass('active');
       }
       $(this).addClass('active');
       var date = new Date(new Date().getTime() + 60000 * 1000);
       document.cookie = "language="+$(this).find('a').text()+"; path='/'; expires=" + date.toUTCString();
       location.reload();
   });
});
