<?php

function select_comment_shortcode(){
    ?>
    <div class="mo_openid_table_layout" id="openid_comments_shortcode" style="font-size:13px !important">
        <br/><code id="10">[miniorange_social_comments]</code>
        <i style= "width: 11px;height: 9px;padding-left:2px;padding-top:3px" class="mofa mofa-fw mofa-lg mofa-copy mo_copy copytooltip" onclick="copyToClipboard(this, '#10', '#shortcode_url10_copy')"><span id="shortcode_url10_copy" class="copytooltiptext">Copy to Clipboard</span></i>
        <br/><br/>
            1. Configure Social Comments in the Social Comments tab of the plugin.<br>
            2. Keep both the display options checked and Save.<br>
            3. Enable Comments for the post/page you want to add <br>
            4. <b>Pages-> Quick Edit-> Allow Comments</b> (Skip this step if you already have Comments enabled.)<br>
            5. Add the shortcode [miniorange_social_comments] to an individual page/post.<br>
    </div>
<script>
    jQuery('#mo_openid_page_heading').text('Social Comments Shortcodes');
</script>
    <?php

}
?>
