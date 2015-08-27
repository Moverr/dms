<?php
foreach(get_trending_groups() as $row){
    if(isset($group)&&$group==$row['id']){
        //switch depending on id
        switch($row['id']){
            //case of news
            case '1':
                //do this
                ?>
                <div class="form-group">
                    <select class="form-control select2-list" data-placeholder="Select an item">
                        <optgroup label="Active new articles">
                            <?php
                            foreach(get_all_news() as $row){
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['title']?></option>
                                <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                    <label>Select with option filtering</label>
                </div>
                <?php
                break;
            //case of career
            case '2':
                ?>
                <div class="form-group">
                    <select class="form-control select2-list" data-placeholder="Select an item">
                        <optgroup label="Active jobs">
                            <?php
                            foreach(get_active_careers() as $row){
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['title']?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                    <label>Select with option filtering</label>
                </div>
                <?php
                break;
            //case of blog
            case '3':
                ?>
                <div class="form-group">
                    <select class="form-control select2-list" data-placeholder="Select an item">
                        <optgroup label="Active blog articles">
                            <?php
                            foreach(get_active_files() as $row){
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['title']?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                    <label>Select with option filtering</label>
                </div>
                <?php
                break;
            //case of files
            case '4':
                ?>
                <div class="form-group">
                    <select class="form-control select2-list" data-placeholder="Select an item">
                        <optgroup label="Active new articles">
                            <?php
                            foreach(get_all_news() as $row){
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['title']?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                    <label>Select with option filtering</label>
                </div>
                <?php
                break;
            //case of events
            case '5':
                ?>
                <div class="form-group">
                    <select class="form-control select2-list" data-placeholder="Select an item">
                        <optgroup label="Active new articles">
                            <?php
                            foreach(get_active_events() as $row){
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['title']?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                    <label>Select with option filtering</label>
                </div>
                <?php
                break;
            //case of users
            case '6':
                ?>
                <div class="form-group">
                    <select class="form-control select2-list" data-placeholder="Select an item">
                        <optgroup label="Active new articles">
                            <?php
                            foreach(get_active_users() as $row){
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['fname'].' '.$row['lname']?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                    <label>Select with option filtering</label>
                </div>
                <?php
                break;

        }
    }
}

?>
<script>
    $(document).ready(function(){
        $('.select2-list').select2();
    });
</script>