<!-- BEGIN BASE-->
<div id="base">





<!-- BEGIN CONTENT-->
<div id="content">
<section>
<div class="section-body">

<div class="row">

    <!-- BEGIN SITE ACTIVITY -->
    <div class="col-md-9">
        <div class="card">
            <div class="card-head">
                <header>Today's Pick</header>
            </div>
            <div class="card-body card-body text-default-light">

                <div class="media">
                    <div class="col-md-6">
                        <img alt="Bootstrap Media Preview" src="http://localhost/projects/cenks/uploads/blogs/websites-blocked-in-india.png" class="media-object img-responsive">
                    </div>
                    <div class="col-md-6">
                        <div class="media-body">
                            <h4 class="media-heading">
                                Accessing youtube and facebook even when your IT guys have blocked it                                </h4>
                            Am not one to spread mischief or incite &nbsp;revolt in the work place, heck am an advocate for effective time utilization while at work.

                            A friend of s...
                            Accessing youtube and facebook even when your IT guys have blocked it                                </h4>
                            Am not one to spread mischief or incite &nbsp;revolt in the work place, heck am an advocate for effective time utilization while at work.

                            A friend of s...
                        </div>
                    </div>


                </div>
            </div><!--end .card-body -->

        </div>

        <div class="card">
            <div class="card-head">
                <header>Recent Posts</header>

            </div><!--end .card-head -->
            <div class="card-body no-padding height-9">
                <?php
                $left=array();
                $right=array();
                $i=0;
                foreach(get_active_blog_articles($limit = '8') as $row){
                    $i++;
                    if($i%2==0){
                        $left[]=$row;
                    }else{
                        $right[]=$row;
                    }
                }

                ?>
                <div class="col-md-6">

                    <?php
                    foreach($left as $row){
                        ?>
                        <div class="media">
                            <div class="col-md-3">
                                <img  alt="Bootstrap Media Preview" src="<?=base_url()?>uploads/blogs/<?=$row['cover_image']?>" class="media-object img-responsive" />
                            </div>
                            <div class="col-md-9">
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <?=$row['title']?>
                                    </h4>
                                    <?=trim_text(html_entity_decode($row['content']),150)?>

                                </div>
                            </div>


                        </div>
                    <?php
                    }
                    ?>

                </div><!--end .row -->

                <div class="col-md-6">
                    <?php
                    foreach($right as $row){
                        ?>
                        <div class="media">
                            <div class="col-md-3">
                                <img  alt="Bootstrap Media Preview" src="<?=base_url()?>uploads/blogs/<?=$row['cover_image']?>" class="media-object img-responsive" />
                            </div>
                            <div class="col-md-9">
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <?=$row['title']?>
                                    </h4>
                                    <?=trim_text(html_entity_decode($row['content']),150)?>

                                </div>
                            </div>


                        </div>
                    <?php
                    }
                    ?>

                </div><!--end .row -->

            </div><!--end .card-body -->
        </div><!--end .card -->


        <div class="card">
            <div class="card-head">
                <header>Recent Photos</header>
            </div>
            <div class="card-body text-default-light">

                <div class="row">

                    <ul id="light-gallery" class="gallery">

                        <?php
                        $i=0;
                        foreach(get_recent_images(300,6) as $row){
                            $i++;
                            if($i%3===0){
                                ?>
                                <div style="margin-bottom: 10px;" class="row">
                                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4" data-src="<?=base_url()?>uploads/files/<?=$row['fileurl']?>">
                                        <a href="#">
                                            <img  class="img-responsive " src="<?=base_url()?>uploads/files/<?=$row['fileurl']?>" alt="Short alt text">
                                        </a>
                                    </li>
                                </div>


                            <?php
                            }else{
                                ?>
                                <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"  data-src="<?=base_url()?>uploads/files/<?=$row['fileurl']?>">
                                    <a href="#">
                                        <img  class="img-responsive " src="<?=base_url()?>uploads/files/<?=$row['fileurl']?>" alt="Short alt text">
                                    </a>
                                </li>

                            <?php
                            }

                        }
                        ?>

                    </ul>




            </div><!--end .card-body -->
        </div>
            </div>

        <div class="card">
            <div class="card-head">
                <header>Recent Videos</header>
            </div>
            <div class="card-body text-default-light<div class="row">

            <ul id="light-gallery" class="gallery">

                <?php
                $i=0;
                foreach(get_files_by_type_name('videos') as $row){
                    $i++;
                    if($i%3===0){
                        ?>
                        <div style="margin-bottom: 10px;" class="row">
                            <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4" data-src="<?=$row['fileurl']?>">
                                <a href="#">
                                    <img  class="img-responsive " src="<?=$row['fileurl']?>" alt="Short alt text">
                                </a>
                            </li>
                        </div>


                    <?php
                    }else{
                        ?>
                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"  data-src="<?=base_url()?>uploads/files/<?=$row['fileurl']?>">
                            <a href="#">
                                <img  class="img-responsive " src="<?=base_url()?>uploads/files/<?=$row['fileurl']?>" alt="Short alt text">
                            </a>
                        </li>

                    <?php
                    }

                }
                ?>

            </ul>




        </div><!--end .card-body --><div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end .card-body -->
        </div>
        <div class="card">
            <div class="card-head">
                <header>Browse by category</header>
            </div>
            <div class="card-body text-default-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
                                        <div class="caption">
                                            <h3>
                                                Thumbnail label
                                            </h3>
                                            <p>
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end .card-body -->
        </div>
    </div><!--end .col -->

    <!-- END SITE ACTIVITY -->

    <!-- BEGIN SERVER STATUS -->
    <div class="col-md-3">
        <div class="card">

            <div class="card-body text-default-light">
                <?=$this->load->view('public/parts/mail_chimp')?>
            </div><!--end .card-body -->
        </div>

        <div class="card">
            <div class="card-head">
                <header>Hot Topic</header>

            </div><!--end .card-head -->
            <div class="card-body ">
                <div class="media">

                    <div class="media-body">
                        <h4 class="media-heading">
                            Nested media heading
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.

                    </div>
                    <a href="#" class="pull-left">
                        <img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object" /></a>
                </div>
            </div><!--end .card-body -->
        </div><!--end .card -->

        <div class="card">
            <div class="card-head">
                <header>Most Popular</header>
            </div>
            <div class="card-body text-default-light">
                <div class="media">
                    <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object" /></a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            Nested media heading
                        </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.

                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object" /></a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            Nested media heading
                        </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.

                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object" /></a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            Nested media heading
                        </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.

                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object" /></a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            Nested media heading
                        </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.

                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object" /></a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            Nested media heading
                        </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.

                    </div>
                </div>
            </div><!--end .card-body -->
        </div>

        <div class="card">
            <div class="card-head">
                <header>Latest Downloads</header>
            </div>
            <div class="card-body text-default-light">

                <ul class="list">
                    <li class="tile">
                        <a class="tile-content ink-reaction">
                            <div class="tile-text">Inbox</div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction">
                            <div class="tile-text">Starred</div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction">
                            <div class="tile-text">Sent email</div>
                        </a>
                    </li>
                </ul>

            </div><!--end .card-body -->
        </div>


        <div class="card">
            <div class="card-head">
                <header>Follow me</header>
            </div>
            <div class="card-body text-default-light">
                <?=$this->load->view('public/parts/fbk_likebox')?>
            </div><!--end .card-body -->
        </div>


    </div><!--end .col -->
    <!-- END SERVER STATUS -->

</div><!--end .row -->

</div><!--end .section-body -->
</section>
</div><!--end #content-->
<!-- END CONTENT -->























</div>




