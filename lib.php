<?php
function local_module_event_extend_settings_navigation($settingsnav, $context) {
		global $CFG, $PAGE;

		if ($settingnode = $settingsnav->find('manageinstances', navigation_node::TYPE_SETTING)) { 
			$settingnode->remove();
		}
	}
function local_plugin_name_extend_navigation(global_navigation $navigation)
    {
        global $CFG,$DB,$USER, $PAGE;
		
			
				$navigation->add("Course text",new moodle_url("/local/..."));
				if(is_siteadmin())
				{
    				$nav=$navigation->add("Coursetext");
    				$nav->add("name",new moodle_url("/local/..."));
				}
				$navigation->add("newnode",new moodle_url("/local/..."));
                if ($settingnode = $navigation->find('participants', navigation_node::TYPE_CONTAINER)) { 
                    //print_object($navigation);
        			$settingnode->remove();
        		}
		
	}
   ?>
