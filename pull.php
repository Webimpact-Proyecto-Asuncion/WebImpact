<?php
	// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
shell_exec( ‘cd /var/www/royerdac99.codes/WebImpact/ && git reset –hard HEAD && git pull’ );
}
?>hi

