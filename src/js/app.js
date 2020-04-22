var source = $("#template-playlist").html();
var template = Handlebars.compile(source);

var urlBase = "server.php";
stampa();

function stampa(){
    $.ajax({
        url: urlBase,
        method: 'GET',
        success: function(data){
            var dati = data;
            var playlistAjax = dati.ajax;
            for (var i = 0; i < playlistAjax.length; i++) {
                var dato = playlistAjax[i];
                var infoPlaylist = {
                    img: dato.poster,
                    titolo: dato.title,
                    autore: dato.author,
                    anno: dato.year,
                    value: dato.value
                }
                var templateFinale = template(infoPlaylist)
                $('.container-ajax .cards').append(templateFinale);
            }
        },
        error: function(){
            alert('errore');
        }
    });
}

//Seleziona tipo di musica
$('.music-type-ajax').change(function(){
    var selectedMusicType = $(this).val();
    if (selectedMusicType == "") {
        $('.card').show();
    } else {
        $('.card').each(function(){
        var thisMusicType = $(this).attr('data-music');
           if (selectedMusicType.toLowerCase() == thisMusicType.toLowerCase()) {
                $(this).show();
            } else {
                $(this).hide();
            }
        })
    }
});

//Header scroll
$(document).on('scroll', function(){
    if($(window).scrollTop() > 30){
        $('.container-head').addClass('black');
    }else {
        $('.container-head').removeClass('black');
    }
})
