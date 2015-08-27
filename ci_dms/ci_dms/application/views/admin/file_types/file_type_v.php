
            <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">Acceptable file types</h3>
            </div>
            <div class="panel-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th>Title</th>
                        <th>Acceptable formats</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($file_types_paginated as $file)
                    {
                        ?>
                        <tr>

                            <td><?=$file['title']?></td>
                            <td><?=$file['formats']?></td>

                        </tr>
                    <?php
                    }
                    ?>


                    </tbody>
                </table>
            </div>


