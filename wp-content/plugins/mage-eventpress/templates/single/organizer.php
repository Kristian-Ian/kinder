<p>
    <?php echo mep_get_option('mep_by_text', 'label_setting_sec') ? mep_get_option('mep_by_text', 'label_setting_sec') : esc_html__('By:','mage-eventpress');  ?>
    <a href="<?php  echo get_term_link( $author_terms[0]->term_id, 'mep_org' );  ?>">
        <?php  echo esc_html($author_terms[0]->name); ?>
    </a>
</p>