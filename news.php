<?php
/*
Template Name: news.php
 */
?>

<?php get_header(); ?>

<?php get_back_header(); ?>

<?php
	$home_url = home_url();
	$comment_url = $home_url . "/wp-comments-post.php";
	$subscribe_url = $home_url . "/index.php/getupdates";

	$article_id = $_GET['id'];
	$bFound = false;

	$news_query = new WP_Query('category_name=news');

	if ($news_query->have_posts()):
		while($news_query->have_posts()):
			$news_query->the_post();
			if ($article_id == $post->ID)
			{
				$bFound = true;

				$article_link = $home_url . "/index.php/news?id=" . $post->ID;
				
				/* page body with article*/
				echo '<div id="news">';
				
				echo '<div class="title">' . $post->post_title . '</div>';
				
				echo '<div class="date-container">';
				echo '<div class="date-line"></div>';
				echo '<div class="date">';
				echo date('M', get_the_time('U'));
				the_time(' jS Y');
				echo '</div>';
				echo '</div>';

				echo '<div class="article-content">';
				echo $post->post_content;
				echo '</div>';

				echo '<div class="article-comment">';
				echo '<div class="article-comment-div">';
				echo '<div class="comment-form-title">Comment(' . $post->comment_count . ')</div>';
				echo '<div class="subscribe" onclick="window.location.href=\'' . $subscribe_url . '\'">Subscribe via e-mail</div>';
				echo '</div>';
				echo '<div class="comment-form">';
				echo '<form action="' . $comment_url . '" method="post" id="commentform" novalidate>';
				echo '<div class="comment-field">';
				echo '<textarea id="comment" name="comment" class="comment-box" placeholder="Add a comment..."></textarea>';
				echo '</div>';
				echo '<div class="comment-button-container">';
				echo '<input id="submit" name="submit" class="comment-submit" type="submit" value="POST COMMENT"/>';
				echo '</div>';
				echo '<input type="hidden" name="comment_post_ID" value="' . $post->ID . '" id="comment_post_ID">';
				echo '<input type="hidden" name="comment_parent" value="0" id="comment_parent">';
				echo '<input type="hidden" name="redirect_to" id="redirect_to" value="' . $article_link . '">';
				echo '<input type="hidden" name="author" id="author" value="guest">';
				echo '<input type="hidden" name="email" id="email" value="guest@eosreal.com">';
				echo '<input type="hidden" name="url" id="url" value="">';
				echo '</form>';
				echo '</div>';

				echo '<div class="comment-history">';
				$args = array(
					'post_id' => $article_id,
					'order' => 'DESC',
				);
				$comments_query = new WP_Comment_Query;
				$comments = $comments_query->query( $args );
				if ( $comments ) 
				{
					foreach ( $comments as $comment ) 
					{
						echo '<div class="comment-single">';

						echo '<div class="comment-photo"></div>';
						echo '<div class="comment-time">' . $comment->comment_date . '</div>';
						echo '<div class="comment-author">EOSREAL</div>';
						echo '<div class="comment-body">' . $comment->comment_content . '</div>';

						echo '<div class="comment-split-line"></div>';
						echo '</div>';
					}
				}
				echo '</div>';

				echo '<div class="bottom-placeholder"></div>';

				echo '</div>';
				echo '</div>';

				break;
			}
		endwhile;
	endif;

	if ($bFound == false)
	{
		echo '<div id="getupdates">';
		echo '<div class="wrap">';
		echo '<div class="result">Article Not Found</div>';
		echo '</div>';
		echo '</div>';
	}

	wp_reset_query();
?>

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