<?php
    echo $javascript->link('jquery-1.5.2.min.js');
	//echo $javascript->link('ui.core.js');
  	//echo $javascript->link('ui.resizable.js');
    echo $javascript->link('fullcalendar.min.js');
    //echo $javascript->link('ui.draggable.js');
    echo $html->css('fullcalendar');
?>
        
<script type='text/javascript'>

    $(document).ready(function() {
    	
        $('#calendar').fullCalendar({
        	events: "./appointments/feed",       
        	defaultView:'agendaWeek',	 
        	header: {
	            left: 'prev,next today',
	            center: 'title',
	            right: 'month,agendaWeek,agendaDay'
        	},
        	 selectable: true,
             selectHelper: true,
             disableDragging: true,
             disableResizing:true,
             dayClick: function(date, allDay, jsEvent, view) {
        	    $("#lightbox-panel").load("<?php echo Dispatcher::baseUrl();?>/appointments/addAppointment/"+allDay+"/"+$.fullCalendar.formatDate( date, "dd/MM/yyyy/HH/mm"));
        	    $("#lightbox, #lightbox-panel").fadeIn(300);       	    
        	},
    		
        });
    });

</script>

<style type="text/css">
        	#lightbox{
				display:none;
        		background:#000000;
				opacity:0.9;
				filter:alpha(opacity=90);
        		position:absolute;
				top:0px;
				left:0px;
				min-width:100%;
				min-height:100%;
				z-index:1000;
        	}
			#lightbox-panel{
				display:none;
				position:fixed;
				top:100px;
				left:50%;
				margin-left:-200px;
				width:450px;
				background:#FFFFFF;
				padding:10px 15px 10px 15px;
				border:2px solid #CCCCCC;
				z-index:1001;
			}
		</style>
	


<div id="lightbox-panel">
	
</div>
<div id="lightbox"></div>

<div id="calendar"></div>