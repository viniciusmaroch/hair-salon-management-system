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


<div id="lightbox-panel"></div>
<div id="lightbox"></div>
<div id="calendar"></div>

