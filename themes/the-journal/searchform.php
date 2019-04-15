<?php $unique_id = uniqid( 'search-form-' ); ?>
<form id="<?php echo esc_attr( $unique_id ); ?>" role="search" method="get" class="fw-search-form search-form"
	  action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" name="s" class="fw-input-search"
		   placeholder="<?php esc_html_e( 'Search...', 'the-journal' ); ?>">

	<div class="fw-submit-wrap">
		<input type="submit" value="">
	</div>
</form>