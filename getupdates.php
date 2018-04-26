<?php
/*
Template Name: getupdates.php
 */
?>

<?php get_header(); ?>

<?php get_nav_header(); ?>

<div id="getupdates">
	<div class="wrap">
		
<?php
	$home_url = home_url();
	$subscribe_url = $home_url . "/?na=s";

	echo '<form method="post" onsubmit="return ValidSubmit();" action="' . $subscribe_url . '">';

?>
		<div class="title">Subscribe</div>
		<input id="name" name="nn" class="input-box name-field" type="text" placeholder="Name"/>
		<input id="mail" name="ne" class="input-box email-field" type="text" placeholder="Email Address"/>

		<div id="check" class="check-field">Email is not filled.</div>

		<input id="submit" name="submit" class="subscribe-submit" type="submit" value="SUBMIT">

		<input type="hidden" name="nr" value="widget">
		<input type="hidden" name="nl[]" value="0">
<?php
	echo '</form>';
?>

	</div>
</div>

<script type="text/javascript">

var bMenuShow = false;

function showMenu()
{
	if (bMenuShow)
	{
		bMenuShow = false;
		$("#menu").hide();
	}
	else
	{
		bMenuShow = true;
		$("#menu").show();
	}
}

function ValidSubmit()
{
	var ret = true;
	var msg = '';

	if ($("#name").val() == "")
	{
		msg += 'Name is not filled.</br>';
		ret = false;
	}

	if ($("#mail").val() == "")
	{
		msg += 'Email is not filled.';
		ret = false;
	}

	if (ret == false)
	{
		$("#check").html(msg);
		$("#check").show();
	}

	return ret;
}

</script>

</body>
</html>