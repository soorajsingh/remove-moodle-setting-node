<?php
function local_module_event_extend_settings_navigation($settingsnav, $context) {
		global $CFG, $PAGE;

		if ($settingnode = $settingsnav->find('manageinstances', navigation_node::TYPE_SETTING)) { 
			$settingnode->remove();
		}
	}
   ?>
