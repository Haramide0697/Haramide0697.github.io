<script type="text/javascript">
	var heightval = 'm^2';
		function checkheight(){
	var id = <?php echo $id; ?>;
    var dataString = "id="+id+"&action=checkhei";
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : dataString,
        beforeSend : function(){
        },
        success : function(response){
        	if (response == 'yesplease') {
        	$("#checkthis").val('process');
        	}
        	
        }
    });
}	
	$(document).ready(function(){
		notifyme();
		sidemess()
		setInterval(function(){ 
        checkheight();
    	}, 1000);

		/*$("#textmessage").keypress(function(){
			if ($("#checkthis").val() == "process") {
				
				var messval = $("#textmessage").val();
				$("#textmessage").val(messval+heightval);
			}
		});*/

		$("#sendmessage").on('submit' ,(function(e) {
					e .preventDefault();
					$ .ajax({
					url : "control.php" , //Url to which the request issend
					type : "POST" , //Type of request to be send,called as method
					data : new FormData(this), //Data sent to server, a set of key/value pairs(i.e.form fields and values)
					contentType : false, //The content type used when sending data to the server.
					cache : false , //To unable request pages to be cached
					processData : false, //To send DOMDocument or non processed data file it is set to false
					beforeSend : function(){
					            
					        },
					success: function(data) //A function to be called if request succeeds
					{
					$('#others').html(data);
					promess();
					
					
					}
					});
		}));
	});
	function promess(){
	var id = <?php echo $id; ?>;
    var dataString = "id="+id+"&action=promessage";
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : dataString,
        beforeSend : function(){
        $('#messloading').show();
		scrollToBottom(document.getElementById('content'));
        },
        success : function(response){
        	$('#messloading').hide();
            $('#others').html(response);
            $('#textmessage').val('');
            notifyme();
            sidemess()
        }
    });
}


	function notifyme(){
	var id = <?php echo $id; ?>;
    var dataString = "id="+id+"&action=notify";
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : dataString,
        beforeSend : function(){
		scrollToBottom(document.getElementById('content'));
        },
        success : function(response){
        	$('#messloading').hide();
            $('#others').html(response);
            scrollToBottom(document.getElementById('content'));
        }
    });
}

    function sidemess(){
	var id = <?php echo $id; ?>;
    var dataString = "id="+id+"&action=sidecheck";
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : dataString,
        beforeSend : function(){
        },
        success : function(response){
            $('#aimessage').html(response);
        }
    });

}	
	
</script>
<div class="container">
	<div class="col-md-12">
		<div class="bottom">
			<form class="position-relative w-100" id="sendmessage">
				<textarea class="form-control" name="textmessage" id="textmessage" placeholder="Start typing for reply..." rows="1"></textarea>
				<input type="hidden" name="ident" value="<?php echo $id; ?>">
				<input type="hidden" id="checkthis">
				<button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
				<button type="submit" class="btn send"><i class="material-icons">send</i></button>
			</form> 
		</div>
	</div>
</div>