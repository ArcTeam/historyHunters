$(document).ready(function(){
    $("a").on("click", function(e){e.preventDefault();});
});

function scrollTo(id){
    $("html, body").stop().animate({scrollTop: $(id).offset().top - 200}, 800);
}
