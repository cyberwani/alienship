<?php
// header*.php
function alienship_head() { do_action('alienship_head'); }
function alienship_stylesheets() { do_action('alienship_stylesheets'); } // Not completed
function alienship_wrap_before() { do_action('alienship_wrap_before'); } // Not completed
function alienship_header_before() { do_action('alienship_header_before'); }
function alienship_header_inside() { do_action('alienship_header_inside'); } // Not completed
function alienship_header_after() { do_action('alienship_header_after'); } // Not completed

// 404.php, archive.php, author.php index.php, page*.php, search.php, single.php
function alienship_content_before() { do_action('alienship_content_before'); } // Not completed
function alienship_content_after() { do_action('alienship_content_after'); } // Not completed
function alienship_main_before() { do_action('alienship_main_before'); } // Not completed
function alienship_main_after() { do_action('alienship_main_after'); } // Not completed
function alienship_post_before() { do_action('alienship_post_before'); } // Not completed
function alienship_post_after() { do_action('alienship_post_after'); } // Not completed
function alienship_post_inside_before() { do_action('alienship_post_inside_before'); } // Not completed
function alienship_post_inside_after() { do_action('alienship_post_inside_after'); } // Not completed
function alienship_loop_before() { do_action('alienship_loop_before'); } // Not completed
function alienship_loop_after() { do_action('alienship_loop_after'); } // Not completed
function alienship_sidebar_before() { do_action('alienship_sidebar_before'); } // Not completed
function alienship_sidebar_inside_before() { do_action('alienship_sidebar_inside_before'); } // Not completed
function alienship_sidebar_inside_after() { do_action('alienship_sidebar_inside_after'); } // Not completed
function alienship_sidebar_after() { do_action('alienship_sidebar_after'); } // Not completed

// footer*.php
function alienship_footer_before() { do_action('alienship_footer_before'); }
function alienship_footer_inside() { do_action('alienship_footer_inside'); }
function alienship_footer_after() { do_action('alienship_footer_after'); }
function alienship_footer() { do_action('alienship_footer'); }
?>