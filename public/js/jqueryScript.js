// On vérifie s'il y a des boutons d'jout en favori dans le DOM
if($(".bt-favori").length > 0){
    // On leur ajoue un écouteur d'événmznt sur le click à l'aide de la méthode jquery on (evenment, callback)
    $(".bt-favori").on("click", function(event){
        event.preventDefault();
        event.stopPropagation();
        var bt = $(this);
        var produitId = $(this).attr("data-produitid"); // $(this) fait référence au bouton ayant déclenché l'événement
        $.ajax({
            url: '/compte/addfavori',
            type: 'post',
            data: "id="+produitId
        }).done(function(response){
           $(bt).hide();
        }).fail(function(error){
            console.log("ajax error :", error);
        })
    });

}