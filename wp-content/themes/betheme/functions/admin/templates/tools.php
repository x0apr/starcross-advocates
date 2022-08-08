<?php
if( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}
?>

<div id="mfn-dashboard" class="wrap about-wrap">

	<?php include_once get_theme_file_path('/functions/admin/templates/parts/header.php'); ?>

	<div class="dashboard-tab tools">

		<div class="col col-fw">

			<h3 class="primary"><?php esc_html_e( 'Tools', 'mfn-opts' ); ?></h3>

			<div class="row">

				<div class="label">
					<h4><?php esc_html_e( 'Local CSS', 'mfn-opts' ); ?></h4>
				</div>

				<div class="content">
					<a data-nonce="<?php echo wp_create_nonce( 'mfn-builder-nonce' ); ?>" data-action="mfn_regenerate_css" href="#" class="button button-secondary tools-do-ajax"><?php esc_html_e( 'Regenerate files', 'mfn-opts' ); ?></a>
				</div>

				<div class="description">
					<p><?php esc_html_e( 'Some Builder styles are saved in CSS files in the uploads folder and database. Recreate those files and settings.', 'mfn-opts' ); ?></p>
				</div>

			</div>

			<div class="row">
				<div class="label">
					<h4><?php esc_html_e( 'Local Fonts', 'mfn-opts' ); ?></h4>
				</div>

				<div class="content">
					<a data-nonce="<?php echo wp_create_nonce( 'mfn-builder-nonce' ); ?>" data-action="mfn_regenerate_fonts" href="#" class="button button-secondary tools-do-ajax"><?php esc_html_e( 'Regenerate fonts', 'mfn-opts' ); ?></a>
				</div>

				<div class="description">
					<p>
						You chose to Cache fonts local in <a target="_blank" href="admin.php?page=<?php echo apply_filters('betheme_slug', 'be') ?>-options#performance-general">Performance</a> tab.<br />
						Please Regenerate fonts every time you change anything in <a target="_blank" href="admin.php?page=<?php echo apply_filters('betheme_slug', 'be') ?>-options#font-family">Fonts > Family</a> tab.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="label">
					<h4><?php esc_html_e( 'Delete History', 'mfn-opts' ); ?></h4>
				</div>

				<div class="content">
					<a data-nonce="<?php echo wp_create_nonce( 'mfn-builder-nonce' ); ?>" data-action="mfn_history_delete" href="#" class="button button-secondary tools-do-ajax confirm"><?php esc_html_e( 'Delete', 'mfn-opts' ); ?></a>
				</div>

				<div class="description">
					<p><?php esc_html_e( 'Delete all Builder history entries.', 'mfn-opts' ); ?></p>
				</div>
			</div>

		</div>

	</div>

</div>
