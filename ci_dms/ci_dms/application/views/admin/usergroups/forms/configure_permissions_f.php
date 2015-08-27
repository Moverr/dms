<div class="card">
    <div class="card-head">
        <header><?=$pagetitle?></header>
    </div>
    <div class="card-body text-default-light">
        <?php
        //get active permissions
        $section=array();
        //print_array(get_active_permissions());
        foreach(get_active_permissions() as $permission)
        {
            //put sections into array
            if(!in_array($permission['section'],$section))
            {
                $section[]=$permission['section'];
            }
        }
        //print_array($section);
        ?>

        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary" href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>"><i class="fa fa-list"></i></a>
        </p>


        <div class="panel-group" id="accordion1">

            <?php
            $i=0;
            //check_permission_by_group('delete_user',decryptValue($this->uri->segment(4)));
            foreach($section as $row)
            {
                $i++;
                ?>
                <div class="card panel">
                    <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                        <header> <a href="#acc<?=$i?>ColOne">
                                <?=$row?>
                            </a></header>
                        <div class="tools">
                            <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div id="accordion1-1" class="collapse">
                        <div class="card-body">
                            <?php
                            //print_array(get_permissions_by_group(decryptValue($this->uri->segment(4))));
                            foreach(get_permissions_by_section($row) as $permission)
                            {

                                ?>
                                <div class="col-md-4">
                                    <label class="check">
                                        <?php
                                        if(check_permission_by_group($permission['code'],decryptValue($this->uri->segment(4))))
                                        {
                                            ?>
                                            <input checked value="<?=$permission['id']?>" type="checkbox" class="icheckbox checks"/>
                                        <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <input value="<?=$permission['id']?>" type="checkbox" class="icheckbox checks"/>
                                        <?php
                                        }

                                        ?>

                                        <?=$permission['permission']?>
                                    </label>
                                </div>
                            <?php



                            }
                            ?>
                        </div>
                    </div>
                </div><!--end .panel -->



            <?php
            }
            ?>

        </div><!--end .panel-group -->


        <div class="row">
            <button id="create" type="button" class="btn ink-reaction btn-raised btn-primary">Update</button>

            <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>" class="btn-default btn">Cancel</a>


            <p>

            <div style="margin-top: 10px;" class="message">

            </div>
            </p>

        </div>

        <script>
            $(document).ready(function(){
                $('#create').click(function(){
                    //loading gif
                    $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');
                    var checkedValues = $('.checks:checked').map(function() {
                        return this.value;
                    }).get();

                    $.ajax({
                        url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                        type: 'POST',
                        data:
                        {
                            permissions :       checkedValues,
                            user_group: '<?=decryptValue($this->uri->segment(4))?>',
                            ajax:           'update_permissions_f'
                        },
                        success: function(msg) {

                            $('.message').html(msg);

                            var count = 1;
                            var countdown = setInterval(function(){
                                $("countdown").html(count + " seconds remaining!");
                                if (count == 0) {
                                    clearInterval(countdown);
                                    window.open("<?=current_url()?>", "_self");

                                }
                                count--;
                            }, 500);

                        }
                    });



                    //alert(checkedValues);

                    return false;
                });

            });
        </script>






        <script>
            $(function () {
                $('.foo').click(function(){
                    //loading gif
                    $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

                    var usertytpe           ='<?=$usertype?>';

                    var checkedValues = $('input:checkbox:checked').map(function() {
                        return this.value;
                    }).get();

                    $.ajax({
                        url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                        type: 'POST',
                        data:
                        {

                            permissions:    checkedValues,
                            usertype:       usertytpe,
                            ajax:           'update_permissions_f'
                        },
                        success: function(msg) {

                            $('.message').html(msg);

                        }
                    });



                    return false;

                });
            });


        </script>

    </div><!--end .card-body -->
</div>
