$(document).ready(function() {
     var pgurl = './' + window.location.href.substr(window.location.href.lastIndexOf("/")+1);

     $("li>a").each(function(){
     		console.log(pgurl)
     		console.log(window.location)
     		console.log(window.location.href)
     		console.log(window.location.href.substr(1))
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     });

//     $('li').click(function (e) {
//     // e.preventDefault();
//     $('li > a').removeClass('active');
//     $(this.a).addClass('active');
// });

});