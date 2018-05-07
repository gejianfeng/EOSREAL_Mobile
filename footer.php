<?php
/*
Template Name: footer.php
*/
?>
	<div id="footer">
		<div class="wrap">

<?php
	$home_url = home_url();

	$ret = '';
	$ret .= '<div class="logo" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div>';
	$ret .= '<div class="content email">eos@eosreal.com</div>';
	$ret .= '<div class="content terms">Terms of Use</div>';
	$ret .= '<div class="content privacy">Privacy Policy</div>';

	echo $ret;
?>

		</div>
	</div>
</body>
</html>