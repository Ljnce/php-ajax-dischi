var source = $("#template-playlist").html();
var template = Handlebars.compile(source);

$.ajax({
    url: "server.php",
    method: 'GET',
    success: function(data){
        var dati = JSON.parse(data);
        console.log(dati);
        for (var i = 0; i < dati.length; i++) {
            var dato = dati[i];
            var infoPlaylist = {
                img: dato.poster,
                titolo: dato.title,
                autore: dato.author,
                anno: dato.year,
                value: dato.value
            }
            var templateFinale = template(infoPlaylist)
            $('.container .cards').append(templateFinale);
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
        console.log(thisMusicType);
           if (selectedMusicType.toLowerCase() == thisMusicType.toLowerCase()) {
                $(this).show();
            } else {
                $(this).hide();
            }
        })
    }
});
