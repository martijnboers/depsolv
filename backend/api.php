<?php
header ( 'Access-Control-Allow-Origin: *' );
include "depsolv.php";
$deps = new depsolv ();

if (isset ( $_REQUEST ['q'] )) {
	echo $deps->search ( $_REQUEST ['q'] );
}
if (isset ( $_REQUEST ['update'] )) {
	$deps->update ( $_REQUEST ['update'] );
}
?>