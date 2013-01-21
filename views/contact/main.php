<script type="text/javascript">
	function showMessage(){
		$("#messageStatus").fadeIn("slow", function(){
				$("#contactForm").css({opacity: 0.6});
			}).delay(1500).fadeOut("slow", function(){
				$("#contactForm").css({opacity: 1});	
			});
	}

	function submitFinished(response){
		//Set appropriate message
		response = $.trim(response);
		if (response == "success"){
			$("#messageSent").show();
			$("#messageError").hide();
		} else {
            $("#messageError").text(response).show();
			$("#messageSent").hide();
		}
	
		showMessage();
	}
	
	$(document).ready(function(){
        $("input[type=submit]").button();	
			
		//On submit
		$("#submitID").click(function(){
			$.ajax({
				url: $("#contactForm").attr("action"),
				type: $("#contactForm").attr("method"),
				data: $("#contactForm").serialize() + "&ajax=true",
				success: submitFinished
			});			
			return false;
		});
	});
</script>

<h2>Contact</h2>

<br/>

<form id="contactForm" method="POST" action="<?php echo SITE_ROOT;?>/contact/action">
    <input type="hidden" id="resend" value="false" />
    
    <label>Name:</label>
    <input type="text" id="nameID" name="name" />
    
    <br/>
    
    <label>Email:</label>
    <input type="email" id="emailID" name="email" />
    
    <br/>
    
    <label>Subject:</label>
    <input type="text" id="subjectID" name="subject" />
    
    <br/>
    
    <label>Message:</label>
    <textarea name="message" id="messageID"></textarea>
    
    <br/>
    <div class="center">
        <input type="submit" value="Send" id="submitID" />
    </div>
    
    <br/>
    
    <aside>All fields are required.</aside>
</form>

<div id="messageStatus">
	<span id="messageSent">Message has been sent!</span>
	<span id="messageError"></span>
</div>
