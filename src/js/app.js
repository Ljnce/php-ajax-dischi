var source = $("#template-playlist").html();
var template = Handlebars.compile(source);

$.ajax({
    url: "http://localhost:8888/Boolean/Esercizi%20php/php-ajax-dischi/php-ajax-dischi/server.php",
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
                anno: dato.year
            }
            var templateFinale = template(infoPlaylist)
            $('.container').append(templateFinale);
        }
    },
    error: function(){
             alert('errore');
    }
});
