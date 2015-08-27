<?php
/*
#Author: Cengkuru Micheal
9/12/14
2:47 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/17/14
 * Time: 12:15 PM
 */
?>

       <div class="card">
           <p>
               <a class="btn ink-reaction btn-floating-action btn-primary"
                  href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>/blog_categories"><i class="md md-list"></i></a>
           </p>

           <div class="card-body text-default-light">
               <?=$this->load->view($this->uri->segment(1).'/blog/forms/edit_blog_category_f')?>
           </div><!--end .card-body -->
       </div>

