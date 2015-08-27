

<div class="card">

    <div class="card-body text-default-light">
        <div style="margin-left: 1px; margin-bottom: 10px;" class="row">
            <div class="btn-group-vertical">
                <div class="btn-group">
                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown">
                        Sort
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                        <li><a href="#">All Files</a></li>
                        <li><a href="#">Shared with me</a></li>
                        <li><a href="#">Shared by me</a></li>
                        <li><a href="#">Pictures</a></li>
                        <li><a href="#">Documents</a></li>
                        <li><a href="#">Videos</a></li>
                    </ul>
                </div>

            </div>
            <div style="margin-right: 20px;" class="pull-right">Items: 20</div>
        </div>

        <div class="table-responsive">
            <table class="table no-margin table-stripped">
                <thead>
                <tr>

                    <th>File name</th>
                    <th>Modified by</th>
                    <th>Last Opened</th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($x = 0; $x <= 20; $x++) {
                    ?>
                    <tr>

                        <td>Newwave ppda contract </td>
                        <td>Ash Luwambo</td>
                        <td>August / 15 / 2015</td>
                    </tr>
                <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div><!--end .card-body -->
</div>

