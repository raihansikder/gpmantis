<?php
# Translation for Custom Status Code: testing
switch( $g_active_language ) {

	case 'french':
		$s_status_enum_string = '10:nouveau,20:commentaire,30:accepté,40:confirmé,50:affecté,60:à tester,80:résolu,90:fermé';

		$s_testing_bug_title = 'Mettre le bogue en test';
		$s_testing_bug_button = 'A tester';

		$s_email_notification_title_for_status_bug_testing = 'Le bogue suivant est prêt à être TESTE.';
		break;

	default: # english
		$s_status_enum_string = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,60:testing,80:resolved,90:closed';

		$s_testing_bug_title = 'Mark issue Ready for Testing';
		$s_testing_bug_button = 'Ready for Testing';

		$s_email_notification_title_for_status_bug_testing = 'The following issue is ready for TESTING.';
		break;
}
?>