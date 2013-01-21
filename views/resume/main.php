<script>
    $(function(){
        $('#accordion').accordion({
            heightStyle: "content"
        });
    });
</script>
<h2>Resume</h2>

<div id="accordion">
    <h3>Web Resume</h3>
    <div>
        <embed src="<?php echo SITE_ROOT;?>/includes/docs/resume-web.pdf" width="950px" height="1070px"><br/>
        <a href="<?php echo SITE_ROOT;?>/includes/docs/resume-web.pdf" target="_blank">Can't see?</a>
    </div>
    
    <h3>Non-Web Resume</h3>
    <div>
        <embed src="<?php echo SITE_ROOT;?>/includes/docs/resume-nonweb.pdf" width="950px" height="1070px"><br/>
        <a href="<?php echo SITE_ROOT;?>/includes/docs/resume-nonweb.pdf" target="_blank">Can't see?</a>
    </div>
</div>
