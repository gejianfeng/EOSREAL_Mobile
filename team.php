<?php
/*
Template Name: team.php
 */
?>

<?php get_header(); ?>

<?php get_nav_header(); ?>

<div id="team">
</div>

<script type="text/javascript">

<?php
	$home_url = home_url();
	$target_url = $home_url . "/index.php/memberinfo?id=";
	echo "var base_url = '" . $target_url . "';";
?>

var bMenuShow = false;
var info = [
	{
		"image": "image1",
		"name": "Ambreen Gilani",
	},
	{
		"image": "image2",
		"name": "Yifeng Mao, CFA",
	},
	{
		"image": "image3",
		"name": "Dr. Phoebe Xu",
	},
	{
		"image": "image4",
		"name": "Grace Xia",
	},
	{
		"image": "image5",
		"name": "Felicia Bao",
	}
];

$(document).ready(function() {
	var html_code = "";

	for (var idx = 0; idx < info.length; ++idx)
	{
		var data = info[idx];
		var url = base_url + idx.toString();
		var image = data.image;
		var name = data.name;

		html_code += '<div class="cell" onclick="window.location.href=\'' + url + '\';">';
		html_code += '<div class="image ' + image + '"></div>';
		html_code += '<div class="name">' + name + '</div>';
		html_code += '<div class="arrow"></div>';
		html_code += '<div class="line"></div>';
		html_code += '</div>';
	}

	$("#team").html(html_code);
});

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

</script>

</body>
</html>