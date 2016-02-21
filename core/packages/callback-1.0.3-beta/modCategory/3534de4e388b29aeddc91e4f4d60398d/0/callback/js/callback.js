$(document).ready(function(){
    $('.close').click(function(){
	$('.modal').fadeOut();
});
    $('#clbh_phone_div').click(function(){
        $('#modal-callback').fadeIn();
    });
    
    $('#clbh_phone_div').mouseenter(function(eventData){
        $('#clbh_phone_div').toggleClass('cbh-static');
        $('#clbh_phone_div').toggleClass('cbh-hover');
    });
    
    $('#clbh_phone_div').mouseleave(function(eventData){
        $('#clbh_phone_div').toggleClass('cbh-static');
        $('#clbh_phone_div').toggleClass('cbh-hover');
    });
    
    $("#callback_phone").mask("+7-999-999-99-99");
    
    $("#callback_form").submit(function( event ) {
        $("#callback_form input[type=submit]").attr('disabled', 1);    
        
        if ($("#callback_phone ").val()=='' ){
            $("#callback_form .error").show(500).delay(2000).hide(500);
            $("#callback_form input[type=submit]").removeAttr('disabled');
            return false;
        }
        
        $.ajax({
            url: '/assets/components/callback/connector.php',
            data: {
                action: "send_sms",
                phone: $("#callback_phone ").val(),
                city: $("#city ").val(),
            },
            type:"POST",
            dataType : "json",
            error: function (data){
                $('#callback_form .error').html(data.text);
                $("#callback_form input[type=submit]").removeAttr('disabled');
            },
            success: function (data) {
                if (data.error == false){
                    $("#countdown").everyTime(100, 'timer2', function(i) {
                        var s = parseInt($("#countdown").text());
                        var ss = parseInt($("#countdown2").text()); 
                        if (ss == 0){
                            ss=10;
                            s=s-1;
                            $("#countdown").text(s);
                        }
                        ss = ss-1;
                        $("#countdown2").text(ss);
                        if (s==0 && ss==0){
                            if (s == 0){
                                $("#countdown").stopTime('timer2');
                                $("#countdown2").text('0');
                                $("#callback_form input[type=submit]").removeAttr('disabled');
                            }
                        }
                    }, 300);
                    
                    }else{
                    $('#callback_form .error.clbh_banner-h1').html(data.text);
                    $('#callback_form .error.clbh_banner-h1').show(500).delay(2000).hide(500);
                    $("#callback_form input[type=submit]").removeAttr('disabled');
                }
            }
        });
        return false;
    });    
});    