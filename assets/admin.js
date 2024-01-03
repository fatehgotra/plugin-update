jQuery(document).ready(function($){
    $('.deleteRoom').each(function(i,r){
        $(this).on("click",function(){
            confirm("Are you sure to delete ?");
        });
    });
});