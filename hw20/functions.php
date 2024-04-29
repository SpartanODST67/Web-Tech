<?php

function db_connect($db) {
	$dbuser = 'webuser';
	$dbpass = 'Scvf15lv2EFP5NRo';
	$host = 'localhost';
	$dblink = new mysqli($host, $dbuser, $dbpass, $db);
	return $dblink;
}

function redirect ($uri) 
{ ?>
	<script type="text/javascript">
		document.location.href="<?php echo $uri; ?>";
	</script>
<?php die;
}
?>