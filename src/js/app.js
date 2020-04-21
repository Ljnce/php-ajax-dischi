var source = $("#template-playlist").html();
var template = Handlebars.compile(source);

$.ajax({
    url: "server.php",
    method: 'GET',
    success: function(data){
        var dati = JSON.parse(data);
        var playlistAjax = dati.ajax
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

//Seleziona tipo di musica
$('.list-type').change(function(){
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
