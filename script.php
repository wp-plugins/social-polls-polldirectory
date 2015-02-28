<style type="text/css">
.pollframe { border: 0 none; height: 72%; min-height: 300px; min-width: 300px; width: auto; }
</style>

<iframe src="" id="pollframe_<?php echo $pollid; ?>" class="pollframe" allowtransparency="0.8"  scrolling="no"  ></iframe>
<script type="text/javascript">
    (function() {
        function async_load(){
            var s = document.getElementById('pollframe_<?php echo $pollid; ?>'); 
			s.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'polldirectory.net/freeadmin/showpoll.php/?userpollid=<?php echo $pollid; ?>';	
			
        }
        if(window.attachEvent)
		{ window.attachEvent('onload', async_load); }
        else 
		{ window.addEventListener('load', async_load, false); }
    })();
</script>

