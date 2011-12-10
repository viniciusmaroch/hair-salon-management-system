<?php
class AppointmentsController extends AppController  {
    var $name = 'Appointments';
    var $helpers = array('Time','Javascript');
    
    function index(){
    	
    }
	function add() {
		if (!empty($this->data)) {
			$this->Appointment->create();
			if ($this->Appointment->save($this->data)) {
				$this->Session->setFlash(__('The appointment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.', true));
			}
		}
	}
	
	function addAppointment($allday=null,$day=null,$month=null,$year=null,$hour=null,$min=null) {
	    if (empty($this->data)) {
	        //Set default duration: 1hr and format to a leading zero.
	        $hourPlus=intval($hour)+1;
	        if (strlen($hourPlus)==1) {
	            $hourPlus = '0'.$hourPlus;
	        }
	 
	        //Create a time string to display in view. The time string
	        //is either  "Fri 26 / Mar, 09 : 00 â€” 10 : 00" or
	        //"All day event: (Fri 26 / Mar)"
	        if ($allday=='true') {
	            $appointment['Appointment']['allday'] = 1;
	            $displayTime = 'All day appointment: ('
	                . date('D',strtotime($day.'/'.$month.'/'.$year)).' '.
	                $day.' / '. date("M", mktime(0, 0, 0, $month, 10)).')';
	        } else {
	            $appointment['Appointment']['allday'] = 0;
	            $displayTime = date('D',strtotime($day.'/'.$month.'/'.$year)).' '
	                .$day.' / '.date("M", mktime(0, 0, 0, $month, 10)).
	                ', '.$hour.' : '.$min.' &mdash; '.$hourPlus.' : '.$min;
	        }
	       // $this->set("displayTime",$displayTime);
	 
	        //Populate the event fields for the add form
	        $appointment['Appointment']['title'] = 'Appointment description';
	        $appointment['Appointment']['start'] = $year.'-'.$month.'-'.$day.' '.$hour.':'.$min.':00';
	        $appointment['Appointment']['end'] = $year.'-'.$month.'-'.$day.' '.$hourPlus.':'.$min.':00';
	        $this->set('appointment',$appointment);
	        
	        $services = $this->Appointment->Service->find('list');
			$this->set(compact('services'));
	 
	        //Do not use a view template.
	        //$this->layout="empty";
	        
	    } else {
	        //Create and save the new event in the table.
	        //Event type is set to editable - because this is a user event.
	        $this->Appointment->create();
	        
	        $specificService = $this->Appointment->Service->find('first', array('conditions' => array('Service.id' => $this->data['Appointment']['service_id'])));
	       	       
	        $this->data['Appointment']['editable']='1';
	        $this->data['Appointment']['title']=$specificService['Service']['name'];
	        $this->Appointment->save($this->data);
	        $this->Session->setFlash(__('The appointment has been saved', true));	
	        $this->redirect(array('controller' => "appointments", 'action' => "index"));
	    }
}
	
	
    function feed(){
    	//Transform request parameters to MySQL datetime format.
		$mysqlstart = date( 'Y-m-d H:i:s', $this->params['url']['start']);
		$mysqlend = date('Y-m-d H:i:s', $this->params['url']['end']);
		
		//Get the events corresponding to the time range
		$conditions = array('Appointment.start BETWEEN ? AND ?'=> array($mysqlstart,$mysqlend));
		$appointments = $this->Appointment->find('all',array('conditions' =>$conditions));    	
		
		//Create the json array
		$rows = array();
		for ($a=0; count($appointments)> $a; $a++) {
		
			//Is it an all day event?
			$all = ($appointments[$a]['Appointment']['allday'] == 1);
			
			//Create an event entry
			$rows[] = array('id' => $appointments[$a]['Appointment']['id'],
				'title' => $appointments[$a]['Appointment']['title'],
				'start' => date('Y-m-d H:i', strtotime($appointments[$a]['Appointment']['start'])),
				'end' => date('Y-m-d H:i',strtotime($appointments[$a]['Appointment']['end'])),
				'allDay' => $all,
			);
		}
		
		// Return as a json array
		Configure::write('debug', 0);
		
		$this->autoRender = false;
		$this->autoLayout = false;
		$this->header('Content-Type: application/json');
		echo json_encode($rows);
    }
    
}
?>