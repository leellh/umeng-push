<?php
namespace leellh\umengpush\ios;
use leellh\umengpush\IOSNotification;

class IOSBroadcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}