<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
</div><!-- /.site-main -->

<?php the_journal_footer_before(); ?>
<!-- Footer -->
<footer id="colophon" class="site-footer fw-footer" role="contentinfo" itemscope="itemscope"
		itemtype="http://schema.org/WPFooter">
	<?php the_journal_footer_top(); ?>
	<?php the_journal_footer(); ?>
	<?php the_journal_footer_bottom(); ?>
</footer>
<?php the_journal_footer_after(); ?>
</div><!-- /#page -->
<?php the_journal_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>