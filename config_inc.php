<?php

$g_hostname = 'localhost';
$g_db_type = 'mysql';
$g_database_name = 'gpmantis_mnts1';
$g_db_username = 'gpmantis_mnts1';
$g_db_password = '1YheZLMSIH6VqOfb';

	# Custom status code
	define( 'TESTING', 60 );
		
# Revised enum string with new 'testing' status
$g_status_enum_string = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,60:testing,80:resolved,90:closed';

# Status color additions
$g_status_colors['testing'] = '#ACE7AE';

$g_status_enum_workflow[NEW_]         ='30:acknowledged,20:feedback,40:confirmed,50:assigned,80:resolved';
$g_status_enum_workflow[FEEDBACK]     ='30:acknowledged,40:confirmed,50:assigned,80:resolved';
$g_status_enum_workflow[ACKNOWLEDGED] ='40:confirmed,20:feedback,50:assigned,80:resolved';
$g_status_enum_workflow[CONFIRMED]    ='50:assigned,20:feedback,30:acknowledged,80:resolved';
$g_status_enum_workflow[ASSIGNED]     ='60:testing,20:feedback,30:acknowledged,40:confirmed,80:resolved';
$g_status_enum_workflow[TESTING]      ='80:resolved,20:feedback,50:assigned';
$g_status_enum_workflow[RESOLVED]     ='90:closed,20:feedback,50:assigned';
$g_status_enum_workflow[CLOSED]       ='20:feedback,50:assigned';

?>