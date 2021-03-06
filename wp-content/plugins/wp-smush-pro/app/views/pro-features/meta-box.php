<?php
/**
 * Pro features meta box.
 *
 * @package WP_Smush
 *
 * @var string $upsell_url  Upsell URL.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

?>

<ul class="smush-pro-features">
	<li class="smush-pro-feature-row">
		<div class="smush-pro-feature-title">
			<?php esc_html_e( 'Super-smush lossy compression', 'wp-smushit' ); ?></div>
		<div class="smush-pro-feature-desc">
			<?php
			esc_html_e(
				'Optimize images 2x more than regular smushing and with no visible loss in quality using Smush’s intelligent multi-pass lossy compression.',
				'wp-smushit'
			);
			?>
		</div>
	</li>
	<li class="smush-pro-feature-row">
		<div class="smush-pro-feature-title">
			<?php esc_html_e( 'WPMU DEV CDN with WebP Support', 'wp-smushit' ); ?></div>
		<div class="smush-pro-feature-desc">
			<?php
			esc_html_e(
				'Serve your images from our CDN from 45 blazing fast servers around the world. Enable automatic image sizing and WebP support and your website will be absolutely flying.',
				'wp-smushit'
			);
			?>
		</div>
	</li>
	<li class="smush-pro-feature-row">
		<div class="smush-pro-feature-title">
			<?php esc_html_e( 'No limits, no restrictions', 'wp-smushit' ); ?></div>
		<div class="smush-pro-feature-desc">
			<?php
			esc_html_e(
				"Need a one-click bulk optimization solution for compressing your entire existing image library fast and easy? Pro unlocks unlimited bulk smushing, and lifts the image size limit from 5Mb to 32Mb. Did somebody say 'retina'? Yes, please.",
				'wp-smushit'
			);
			?>
		</div>
	</li>
	<li class="smush-pro-feature-row">
		<div class="smush-pro-feature-title">
			<?php esc_html_e( 'Smush my original full size images', 'wp-smushit' ); ?></div>
		<div class="smush-pro-feature-desc">
			<?php
			esc_html_e(
				'By default, Smush only compresses thumbnails and image sizes generated by WordPress. With Smush Pro you can also smush your original images.',
				'wp-smushit'
			);
			?>
		</div>
	</li>
	<li class="smush-pro-feature-row">
		<div class="smush-pro-feature-title">
			<?php esc_html_e( 'Make a copy of my full size images', 'wp-smushit' ); ?></div>
		<div class="smush-pro-feature-desc">
			<?php
			esc_html_e(
				'Save copies the original full-size images you upload to your site so you can restore them at any point. Note: Activating this setting will double the size of the uploads folder where your site’s images are stored.',
				'wp-smushit'
			);
			?>
		</div>
	</li>
	<li class="smush-pro-feature-row">
		<div class="smush-pro-feature-title">
			<?php esc_html_e( 'Auto-convert PNGs to JPEGs (lossy)', 'wp-smushit' ); ?></div>
		<div class="smush-pro-feature-desc">
			<?php
			esc_html_e(
				'When you compress a PNG, Smush will check if converting it to JPEG could further reduce its size, and do so if necessary,',
				'wp-smushit'
			);
			?>
		</div>
	</li>
	<li class="smush-pro-feature-row">
		<div class="smush-pro-feature-title">
			<?php esc_html_e( 'NextGen Gallery Integration', 'wp-smushit' ); ?></div>
		<div class="smush-pro-feature-desc">
			<?php
			esc_html_e( 'Allow smushing images directly through NextGen Gallery settings.', 'wp-smushit' );
			?>
		</div>
	</li>
</ul>
<div class="sui-upsell-row">
	<img class="sui-image sui-upsell-image sui-upsell-image-smush" src="<?php echo esc_url( WP_SMUSH_URL . 'app/assets/images/smush-promo.png' ); ?>">
	<div class="sui-notice sui-notice-purple smush-upsell-notice">
		<p>
			<?php
			printf(
				/* translators: %1$s: starting a tag, %2$s: ending a tag */
				esc_html__(
					'Smush Pro gives you all these extra settings and absolutely no limits on smushing your images. Did we mention Smush Pro also gives you up to 2x better compression too? %1$sTry it all free with a WPMU DEV membership today!%2$s',
					'wp-smushit'
				),
				'<strong>',
				'</strong>'
			);
			?>
		</p>
		<div class="sui-notice-buttons">
			<a href="<?php echo esc_url( $upsell_url ); ?>" class="sui-button sui-button-purple" target="_blank">
				<?php esc_html_e( 'Try Smush Pro for Free', 'wp-smushit' ); ?>
			</a>
		</div>
	</div>
</div>