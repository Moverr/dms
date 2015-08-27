<div class="card">
    <div class="card-head">
        <header><?=$pagetitle?></header>
    </div>
    <div class="card-body text-default-light">
        <p><table class="table datatable_simple">
            <thead>
            <tr>
                <th>#</th>
                <th>Log</th>
                <th>Timestamp</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            //print_array(get_unseen_msg())
            foreach (get_unseen_msg() as $msg) {
                $i++;
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $msg['notification'] ?></td>
                    <td><?= $msg['dateadded'] ?></td>

                </tr>
            <?php
            }
            ?>

            </tbody>
        </table></p>
    </div><!--end .card-body -->
</div>
