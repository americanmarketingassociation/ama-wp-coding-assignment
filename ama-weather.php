<?php
/**
 * Plugin Name:       AMA Weather
 * Description:       A fancy weather block!
 * Version:           1.0.0
 * Author:            You!
 * License:           GPL-2.0-or-later
 * Text Domain:       ama-weather
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
add_action( 'init', 'create_block_ama_weather_block_init' );
function create_block_ama_weather_block_init() {
	register_block_type_from_metadata( __DIR__, [
		'render_callback' => 'render_weather_block',
	] );
}

function render_weather_block( array $attributes ): string {
	$class = 'ama-weather-block';

	ob_start();
	?>
    <div class="<?php echo esc_attr( $class ); ?>">
        <!-- Block title here -->
        <!-- Current temperature here -->
    </div>
	<?php
	return ob_get_clean();
}
