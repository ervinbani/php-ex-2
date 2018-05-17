$(document).ready(function() {
    console.log("ready!");
    //$('.greentext').hide();
    $('.greentext').mouseenter(function(){
        $('.greentext').show();
    });
    $(".greentext").click(function(){
        var thisItem=$(this);
        if($('.item').hasClass("not-completed")){
            thisItem.parent('.item').removeClass("not-completed").addClass("completed");
            thisItem.remove();
        }
    });
    $(document).on('click', ".del", function(){

          $(this).parent().remove();

    });
});
