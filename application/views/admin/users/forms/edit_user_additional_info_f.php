<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/21/14
 * Time: 1:27 PM
 * registration form
 */
//print_array($user_info);
foreach ($user_info as $row) {
    $fname = $row['fname'];
    $lname = $row['lname'];
    $id = $row['id'];

    //print_array(get_user_info_by_id($id,'telephone'));
}
//print_array($user_info);
?>
<div class="block">
    <h4>Update User info</h4>

    <form class="form-horizontal" role="form">

        <div class="form-group">
            <label class="col-md-2 control-label">country</label>

            <div class="col-md-10">
                <select required="" id="country" style="width:100%" class="populate">

                    <optgroup label="Available country">
                        <?php
                        foreach (get_all_countries() as $country) {
                            ?>
                            <option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                        <?php
                        }

                        ?>
                    </optgroup>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">city</label>

            <div class="col-md-10">
                <input type="text" id="city" class="form-control" placeholder="Fill your city in please"
                       value="<?= get_user_info_by_id($id, 'city') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Date of birth</label>

            <div class="col-md-10">
                <input type="text" id="d_o_b" class="form-control datepicker" placeholder="Fill in your birthday please"
                       value="<?= get_user_info_by_id($id, 'd_o_b') ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Map</label>

            <div class="col-md-10">
                <input type="text" id="map" class="form-control" placeholder="Fill in your google maps location please"
                       value="">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Facebook</label>

            <div class="col-md-10">
                <input id="facebook" type="text" class="form-control"
                       placeholder="Fill in your facebook page url please"
                       value="<?= get_user_info_by_id($id, 'facebook') ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Twitter</label>

            <div class="col-md-10">
                <input id="twitter" type="text" class="form-control" placeholder="Fill in your twitter page url please"
                       value="<?= get_user_info_by_id($id, 'twitter') ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Google plus</label>

            <div class="col-md-10">
                <input id="google_plus" type="text" class="form-control"
                       placeholder="Fill in your google plus page url please"
                       value="<?= get_user_info_by_id($id, 'google_plus') ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Telephone</label>

            <div class="col-md-10">
                <input type="text" id="tel" class="form-control" placeholder="Fill in your telephone number"
                       value="<?= get_user_info_by_id($id, 'tel') ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Address</label>

            <div class="col-md-10">
                <input id="address" type="text" class="form-control" placeholder="Fill in your address please"
                       value="<?= get_user_info_by_id($id, 'address') ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Bio</label>

            <div class="col-md-10">
                <textarea id="bio" maxlength="165" class="form-control"
                          rows="5"><?= html_entity_decode(get_user_info_by_id($id, 'bio')) ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"></label>

            <div class="col-md-10">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary register" value="Edit account">
                </div>
            </div>
        </div>


        <div class="message">

        </div>


    </form>

</div>


<script>

    $(document).ready(function () {

        $('#selector1').select2();
        $('.populate').select2();
        $('.datepicker').datepicker();

        $(function () {
            $("textarea[maxlength]").bind('input propertychange', function () {
                var maxLength = $(this).attr('maxlength');
                if ($(this).val().length > maxLength) {
                    $(this).val($(this).val().substring(0, maxLength));
                }
            })
        });


        $('.register').click(function () {

            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


            var country = $('#country').val();
            var city = $('#city').val();
            var d_o_b = $('#d_o_b').val();
            var map = $('#map').val();
            var facebook = $('#facebook').val();
            var twitter = $('#twitter').val();
            var google_plus = $('#google_plus').val();
            var address = $('#address').val();
            var bio = $('#bio').val();
            var tel = $('#tel').val();
            var id = '<?=$id?>';

            //alert(id);
            var form_data =
            {

                city: city,
                country: country,
                d_o_b: d_o_b,
                map: map,
                facebook: facebook,
                twitter: twitter,
                google_plus: google_plus,
                address: address,
                bio: bio,
                id: id,
                tel: tel,
                ajax: 'update_additional'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data: form_data,
                success: function (msg) {

                    $('.message').html(msg);

                }
            });

            return false;

        });


    });


</script>