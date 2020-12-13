$("#departamento").change(function(event){
    $.get("estudiante/"+event.target.value+"",function(response,departamento){
        for ( i = 0; i < response.length; i++) {
            $("#provincia").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</optioon>");
        }
    });
});