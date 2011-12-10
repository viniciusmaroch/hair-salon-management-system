<?php
class Appointment extends AppModel {
	var $name = 'Appointment';
	var $belongsTo = array('Service');
	
	function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['Appointment']['service_id'])) {
			$serviceId = $this->data['Appointment']['service_id'];
		} else {
			$serviceId = $this->field('service_id');
		}
		if (!$serviceId) {
			return null;
		} else {
			return array('Service' => array('id' => $serviceId));
		}
	}
}
?>