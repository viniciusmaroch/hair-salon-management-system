<!-- app/views/appointments/addCalendar.ctp -->
<?php     echo $html->css('cake.generic.css');?>
<?php
    echo $form->create('Appointment', array('target'=> '_parent'));    
    echo $form->input('service_id');
    echo $form->input('user_id');        
    echo $form->input('start', array('value'=>$appointment['Appointment']['start']));
    echo $form->input('end', array('type'=>'hidden','value'=>$appointment['Appointment']['end']));   
   
    echo  $form->end(array('label'=>'Save' ,'name' => 'save'));        
?>
 	<div class="cancel">&nbsp;&nbsp;<input type="button" value="Close" onclick="back();"></div>

<script type="text/javascript">
    function back() {
        window.location.href ="./appointments";
    }
</script>