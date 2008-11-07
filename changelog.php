<?php
	$t_sub_title = "Changelog";

	include( "top.php" );
?>

<span class="page_title">ChangeLog</span>
<hr size="1" noshade="noshade" width="100%" />
<p />

<pre>
<?php
	$lines = file("files/ChangeLog");
	foreach ( $lines as $line ) {
		$line = wordwrap( $line, 98 );
		echo htmlspecialchars( $line );
	}
?>
</pre>

<?php
	include( 'adsense_vertical_inc.php' ); 

	$t_footer_sponsored_links = '';

	include( "bot.php" ); 
?>
