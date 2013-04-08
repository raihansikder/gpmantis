<?php

$g_hostname = 'localhost';
$g_db_type = 'mysql';
$g_database_name = 'gpmantis_mnts1';
$g_db_username = 'gpmantis_mnts1';
$g_db_password = '1YheZLMSIH6VqOfb';

/**
	 * bug history visible by default when you view a bug
	 * change to ON or OFF
	 * @global int $g_history_default_visible
	 */
$g_history_default_visible	= ON;
/**
	 * Enable Profiles
	 * @global int $g_enable_profiles
	 */
$g_enable_profiles = OFF;

	/************
	 * Due Date *
	 ************/

	/**
	 * threshold to update due date submitted
	 * @global int $g_due_date_update_threshold
	 */
	$g_due_date_update_threshold = REPORTER;

	/**
	 * threshold to see due date
	 * @global int $g_due_date_view_threshold
	 */
	$g_due_date_view_threshold = REPORTER;
		
# Revised enum string with new 'testing' status
$g_status_enum_string = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,80:resolved,81:qa_failed,82:qa_passed,90:closed';

# Status color additions
$g_status_colors['qa_failed'] = '#FF6666';
$g_status_colors['qa_passed'] = '#ACE7AE';

$g_status_enum_workflow[NEW_]         ='30:acknowledged,20:feedback,40:confirmed,50:assigned,80:resolved';
$g_status_enum_workflow[FEEDBACK]     ='30:acknowledged,40:confirmed,50:assigned,80:resolved';
$g_status_enum_workflow[ACKNOWLEDGED] ='40:confirmed,20:feedback,50:assigned,80:resolved';
$g_status_enum_workflow[CONFIRMED]    ='50:assigned,20:feedback,30:acknowledged,80:resolved';
$g_status_enum_workflow[ASSIGNED]     ='20:feedback,30:acknowledged,40:confirmed,80:resolved';
$g_status_enum_workflow[RESOLVED]     ='90:closed,20:feedback,50:assigned';
$g_status_enum_workflow[QA_FAILED]    ='80:resolved,20:feedback,50:assigned';
$g_status_enum_workflow[QA_PASSED]    ='80:resolved,20:feedback,50:assigned';
$g_status_enum_workflow[CLOSED]       ='20:feedback,50:assigned';

?>