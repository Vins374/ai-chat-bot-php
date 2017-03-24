<html>
<head>
<title> Bot Chat </title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="styles.css" rel="stylesheet">
</head>
<body>
	
    <!-- <input onclick='responsiveVoice.speak("Hello World");' type='button' value='🔊 Play' /> -->

    


	<div class="container">
    <div class="row">
        <div class="chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
            <div class="col-xs-12 col-md-12">
            	<div class="panel panel-default">
                    <div class="panel-heading top-bar">
                        <div class="col-md-8 col-xs-8">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Bot #1</h3>
                        </div>
                        <div class="col-md-4 col-xs-4" style="text-align: right;">
                            <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                            <a id="start_button" onclick="startButton(event)"> <i class="fa fa-microphone"> </i>  </a>
                            <!-- <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a> -->
                        </div>
                    </div>
                    <div class="panel-body msg_container_base">
                        <!-- <div class="row msg_container base_sent">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages msg_sent">
                                    <p>that mongodb thing looks good, huh?
                                    tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-2 avatar">
                                <img src="img.jpg" class=" img-responsive ">
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-md-2 col-xs-2 avatar">
                                <img src="img.jpg" class=" img-responsive ">
                            </div>
                            <div class="col-md-10 col-xs-10">
                                <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                    tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                    <div class="panel-footer">
                    <form id="formChatBox">
                        <div class="input-group">
                            <input id="txtChatBox" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                            <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" type="submit" id="btn-chat">Send</button>
                            </span>
                        </div>
                    </form>
                    </div>
        		</div>
            </div>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>

<div style="position: absolute;bottom: 0px;margin-left: 40%;">
    <div id="results">
      <span id="final_span" class="final"></span>
      <span id="interim_span" class="interim"></span>
    </div>
    <button class="btn btn-primary" onclick="startButton(event)"> Click Here to Talk </button>
</div>


<input type="hidden" id="txtOldQuestion" />
<input type="hidden" value="" id="txtGiveAnswer" />
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts.js"></script>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
<script src='speach-script.js'></script>
</html>

