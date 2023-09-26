$('img').each($('img').mouseover(function (){
    $(this).css("height","250px");
    var alt = $(this, "img").attr("alt");
    $('h1').text(alt);

$('img').mouseleave(function (){
    $(this).css("height","200px");
    $('h1').text('Star Wars');
})
}))