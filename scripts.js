$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
     size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$(document).on('click', '.icon_close', function (e) {
    //$(this).parent().parent().parent().parent().remove();
    $( "#chat_window_1" ).remove();
});
$(document).ready(function(){
    $("#formChatBox").submit(function(event){
        fun_send_message();
        event.preventDefault();
    });
});


function fun_send_message()
{
    var ques = fun_get_value("txtChatBox");
    var ques_we = fun_get_value_we("txtChatBox")
    set_user_message(ques_we);
    var giveAnswer = fun_get_value("txtGiveAnswer");
    var oldQues = fun_get_value("txtOldQuestion");

    // var ans_str = ques_we.search("||ANS||");
    // console.log(ans_str);
    // if(ans_str>0)
    // {
    //    giveAnswer = "YES";
    //    ques = ques.replace("||ANS||","");
    // }

    $.ajax({                                // Ajax call
            type: "POST",
            dataType: "JSON",
            url: "ajax.php",
             data:"ques="+ques+'&giveAnswer='+giveAnswer+'&oldQues='+oldQues,
                success: function(response) {
                    $("#txtChatBox").val("");
                    // $("#responseSection").html(JSON.stringify(response));
                    console.log(response);
                    if(response.status == true) {
                        if(response.notification == 1) {
                            // $("#butGiveAnswer").removeClass("btn-default").addClass("btn-primary");
                            flagGiveAnswer = 1;
                            $("#txtGiveAnswer").val("");
                            $("#txtOldQuestion").val(response.ques);
                            set_bot_message(response.message);
                            // $("#divAnswerSection").html(response.message);
                        }
                        else {
                            set_bot_message(response.answer);
                            $("#txtOldQuestion").val(response.ques);
                            // $("#divAnswerSection").html(response.answer);
                        }
                    }
                    else {
                        set_bot_message(response.message);
                        $("#txtOldQuestion").val(response.ques);
                        $("#divAnswerSection").html(response.message);
                    }
                },
            error: function() {
                // fun_modal_loader();
            }
        });
}

function set_user_message(message)
{
    var template = '<div class="row msg_container base_sent"> ';
    template = template +'<div class="col-md-10 col-xs-10"> ';
    template = template +'<div class="messages msg_sent"> ';
    template = template +'<p> '+message+'</p> ';
    template = template +'<time datetime="2009-11-13T20:00">Timothy • 51 min</time> ';
    template = template +'</div> ';
    template = template +'</div> ';
    template = template +'<div class="col-md-2 col-xs-2 avatar"> ';
    template = template +'<img src="img.jpg" class=" img-responsive "> ';
    template = template +'</div> ';
    template = template +'</div>';

    $(".msg_container_base").append(template);
    $('.msg_container_base').scrollTop($('.msg_container_base')[0].scrollHeight);
}

function set_bot_message(message)
{
    responsiveVoice.speak(message);
    var template = '<div class="row msg_container base_receive"> ';
    template = template +'<div class="col-md-2 col-xs-2 avatar"> ';
    template = template +'<img src="img.jpg" class=" img-responsive "> ';
    template = template +'</div> ';
    template = template +'<div class="col-md-10 col-xs-10"> ';
    template = template +'<div class="messages msg_sent"> ';
    template = template +'<p> '+message+'</p> ';
    template = template +'<time datetime="2009-11-13T20:00">Timothy • 51 min</time> ';
    template = template +'</div> ';
    template = template +'</div> ';
    template = template +'</div>';

    // $("#start_button").trigger("click");

    $(".msg_container_base").append(template);
    $('.msg_container_base').scrollTop($('.msg_container_base')[0].scrollHeight);
}

function fun_get_value(id)
{
    return encodeURIComponent($.trim($("#"+id).val()));
}

function fun_get_value_we(id)
{
    return $.trim($("#"+id).val());
}