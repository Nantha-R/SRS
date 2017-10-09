$(document).ready(function()
{
    $("#loginButton").click(function(){
        showpopup();
        event.stopPropagation();
    });
    $(document).click(function(e){
        if(($(e.target).id!='loginform') && ($(e.target).parents(".loginform").length === 0))
        {
            
            $(".loginform").fadeOut();
            $(".loginform").css({"visibility":"visible","display":"none"});
        }
    });
    

});

function showpopup()
{
    $(".loginform").fadeIn();
    $(".loginform").css({"visibility":"visible","display":"block"});
}