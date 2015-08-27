<?php
header('Content-type: text/css');
ob_start("compress");

function compress( $minify )
{
    /* remove comments */
    $minify = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify );

    /* remove tabs, spaces, newlines, etc. */
    $minify = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify );

    return $minify;
}
$base_url='http://localhost/projects/cenks/';

/* css files for combining */
include($base_url.'assets_backend/css/jquery.contextMenu.css');
include($base_url.'assets_backend/css/prettify/prettify.sunburst.css');
include($base_url.'assets_backend/assets/plugins/form-tokenfield/bootstrap-tokenfield.css');

include($base_url.'assets_backend/css/theme-default.css');
include($base_url.'assets_backend/assets/plugins/form-select2/select2.css');
include($base_url.'assets_backend/assets/plugins/form-multiselect/css/multi-select.css');

ob_end_flush();