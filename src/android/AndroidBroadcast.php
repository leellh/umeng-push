<?php
namespace leellh\umengpush\ios;
use leellh\umengpush\AndroidNotification;

class AndroidBroadcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}