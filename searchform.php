<?php
/**
 * Custom Search Form
 *
 * @package Acme Themes
 * @subpackage Fitness Hub
 */
$fitness_hub_customizer_all_values = fitness_hub_get_theme_options();
?>
<div class="search-block">
	<form action="<?php echo esc_url( home_url() ); ?>" class="searchform" id="searchform" method="get" role="search">
		<div>
			<label for="menu-search" class="screen-reader-text"></label>
			<?php
			$placeholder_text = '';
			if ( isset( $fitness_hub_customizer_all_values['fitness-hub-search-placeholder'] ) ) :
				$placeholder_text = ' placeholder="' . esc_attr( $fitness_hub_customizer_all_values['fitness-hub-search-placeholder'] ) . '" ';
			endif;
			?>
			<input type="text" <?php echo esc_attr( $placeholder_text ); ?> class="menu-search" id="menu-search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" />
			<button class="searchsubmit fa fa-search" type="submit" id="searchsubmit"></button>
		</div>
	</form>
</div>
