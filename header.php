<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<nav>
			<a class="brand" href="/">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if($image[0]) echo "<img src='" . $image[0] . "'/>";
					bloginfo( 'name' );
				?>
			</a>
			<ul>

			</ul>
		</nav>
		<?php wp_head(); ?>
