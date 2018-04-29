<?php
/*
Template Name: resources.php
 */
?>

<?php get_header(); ?>

<?php get_nav_header(); ?>

<div id="resources">

<?php
	$home_url = home_url();

	$news_query = new WP_Query('category_name=news');

	$count = 0;

	if ($news_query->have_posts()):
		while($news_query->have_posts()):
			$news_query->the_post();
			$title_value = $post->post_title;

			$article_link = $home_url . "/index.php/news?id=" . $post->ID;

			echo '<div class="cell" onclick="window.location.href=\'' . $article_link . '\';">';
			echo '<div class="title">' . $title_value . '</div>';
			echo '<div class="date-cell">';
			echo '<div class="date-line"></div>';
			echo '<div class="date">'; 
			echo date('M', get_the_time('U'));
			the_time(' jS Y');
			echo '</div>';
			echo '</div>';
			echo '<div class="content">';
			the_content('<br/><a href="' . $article_link . '">Learn more</a>', false);
			echo '</div>';
			echo '<div class="line"></div>';
			echo '</div>';

			$count++;
		endwhile;
	endif;

	echo '<div class="bottom"></div>';

	wp_reset_query();
?>

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

</script>

</body>
</html>