// search field in index.html.twig
function emptyForm() {
    document.getElementById("zoeken").reset();
    }


$(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

        var countTable = document.getElementById('td').length;
    
if(countTable < 1) {
    document.getElementById('results').innerHTML = "Geen resultaten gevonden.";
}
        });
    });
});


// flash message
setTimeout(function() {
    $('.flash-success').fadeOut('slow');
    }, 3000); // <-- time in milliseconds



