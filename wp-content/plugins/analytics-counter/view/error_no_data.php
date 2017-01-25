<div style="display: none;" id="modal_error_no_data">
    <div style="padding-left: 30px; margin-top: 20px; vertical-align: middle; display: table-cell; height: 360px">
        <?php echo nl2br(__("Dear User,

Since your website was recently added in Google Analytics account,
usually it takes up to 24 hours to collect data about your website.
For now, Google Analytics Service has reported, that the analytics data (stats data) is still not available for your website.

Please, have a patience, wait up to 24 hours and check this page again.

Thank you for understanding!", 'analytics-counter'));?>

        <div style="text-align: center; padding-top: 40px;">
            <button type="button" class="btn btn-success" style="width: 150px; font-weight: bold" onclick="tb_remove()">Ok</button>
        </div>

    </div>
</div><!-- /.modal -->
<a class="btn btn-info thickbox" href="#TB_inline?width=400&height=390&inlineId=modal_error_no_data" style="display: none;" id="btn_modal_error_no_data"
    onclick="ga_setTitleNoDataWindow()"
    >error</a>

<script>
    function ga_setTitleNoDataWindow() {
        jQuery('#TB_title').html(
            '<span style=\'\'>' +
            '<?php _e('Information', 'analytics-counter');?></span>'
        );

        jQuery('#TB_title').css('background', '#fcfcfc');
        jQuery('#TB_title').css('border-bottom', '1px solid #ddd');
        jQuery('#TB_title').css('height', '29px');
        jQuery('#TB_title').css('background-color', '#4285ba');
        jQuery('#TB_title').css('color', 'white');
        jQuery('#TB_title').css('letter-spacing', '1px');
        jQuery('#TB_title').css('font-weight', 'bold');
        jQuery('#TB_title').css('padding-left', '15px');
        jQuery('#TB_title').css('line-height', '45px');
        jQuery('#TB_title').css('height', '45px');
        jQuery('#TB_title').css('font-size', '18px');
    }
</script>
