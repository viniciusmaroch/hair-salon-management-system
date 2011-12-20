<?php
    echo $javascript->link('jquery-1.5.2.min.js');    
    echo $javascript->link('fullcalendar.min.js');   
    echo $html->css('fullcalendar');   
    echo $html->css('cake.generic.css',false);
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

<?php echo $this->Session->flash();?>
<div class="news view">
<div id="calendar"></div>

</div>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments', true), array('controller' => 'appointments', 'action' => 'viewAll')); ?> </li>
		<li><?php echo $this->Html->link(__('View Calendar', true), array('controller' => 'appointments', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List News', true), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News', true), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts', true), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shifts', true), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div id="lightbox-panel"></div>
<div id="lightbox"></div>


