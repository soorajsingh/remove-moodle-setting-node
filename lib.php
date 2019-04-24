<?php
function local_module_event_extend_settings_navigation($settingsnav, $context) {
		global $CFG, $PAGE;

		if ($settingnode = $settingsnav->find('manageinstances', navigation_node::TYPE_SETTING)) { 
			$settingnode->remove();
		}
	}
function local_subscriptions_extend_navigation(global_navigation $navigation)
    {
        global $CFG,$DB,$USER, $PAGE;
		
			
				$navigation->add("Course Subscriptions",new moodle_url("/local/subscriptions/userplan.php"));
				if(is_siteadmin())
				{
    				$nav=$navigation->add("Course Bundle");
    				$nav->add("Bundle List",new moodle_url("/local/subscriptions/bundle_list.php"));
    				$nav->add("Add New Bundle",new moodle_url("/local/subscriptions/edit_bundle.php"));
				}
				$navigation->add("Subscriptions Plan",new moodle_url("/local/subscriptions/subscriptionplan.php"));
                if ($settingnode = $navigation->find('participants', navigation_node::TYPE_CONTAINER)) { 
                    //print_object($navigation);
        			$settingnode->remove();
        		}
		
	}
   ?>
