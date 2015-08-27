<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 5/12/2015
 * Time: 10:17 AM
 */
function pdf_create($html, $report_title = '')
{

    $ci =& get_instance();
    //load the profile model
    $ci->load->library('dompdf_gen');
    if (!$report_title) {
        $report_title = custom_date_format('d_F_Y', mysqldate()) . '_' . substr(base_url(), 7) . '_report';
    }

    // Convert to PDF
    $ci->dompdf->load_html($html);
    $ci->dompdf->render();
    $ci->dompdf->stream($report_title . ".pdf", array("Attachment" => true));
}
