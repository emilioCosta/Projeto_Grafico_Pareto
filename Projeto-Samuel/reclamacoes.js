$(document).ready(function() {
    $('select').material_select();
   
    $('select').on('change', function (e) {
        if( this.value == "5")
        {
            $("#select").removeClass("input-field col s12");
            $("#select").addClass("input-field col s6");
            $("#outro").show();
        }
        else
        {
           $("#select").removeClass("input-field col s6");
            $("#select").addClass("input-field col s12");
            $("#outro").hide(); 
        }
    });
});