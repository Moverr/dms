<div style="margin-left: 10px;" class="row">

    <div class="btn-group-vertical">
        <div class="btn-group">
            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Create
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                <li><a href="#">File</a></li>
                <li><a href="#">Folder</a></li>
            </ul>
        </div>

    </div>

    <button type="button" class="btn ink-reaction btn-raised btn-primary">Upload</button>

</div>
<ul class="x-navigation">
    <li class="">

    </li>

    <!--        dashboard-->
    <li class="active">
        <a href="<?= base_url() . $this->uri->segment(1) . '/dashboard' ?>"><span class="fa fa-list"></span>
            <span class="xn-text">All Files</span></a>
    </li>


    <li class="xn-openable">
        <a href="#"><span class="fa fa-folder"></span> <span class="xn-text">Folders</span></a>
        <ul>
            <li><a href="<?= base_url() . $this->uri->segment(1) . '/' ?>usertypes"><span
                        class="fa fa-folder"></span> Folder 1</a></li>
            <li><a href="<?= base_url() . $this->uri->segment(1) . '/' ?>usertypes"><span
                        class="fa fa-folder"></span> Folder 2</a></li>
            <li><a href="<?= base_url() . $this->uri->segment(1) . '/' ?>usertypes"><span
                        class="fa fa-folder"></span> Folder 3</a></li>
            <li><a href="<?= base_url() . $this->uri->segment(1) . '/' ?>usertypes"><span
                        class="fa fa-folder"></span> Folder 4</a></li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Folder Levels</span></a>
                <ul>
                    <li class="xn-openable">
                        <a href="#">Second Level</a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#">Third Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Fourth Level</a>
                                        <ul>
                                            <li><a href="#">Fifth Level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>





        </ul>
    </li>
    <li >
        <a href="#"><span class="fa fa-trash"></span> <span class="xn-text">Trash</span></a>

    </li>
    <hr>
   



</ul>