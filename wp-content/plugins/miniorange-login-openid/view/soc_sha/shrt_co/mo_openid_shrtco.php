<?php
function mo_openid_short_code(){
    ?>

    <div class="mo_openid_table_layout" >
        <table>
            <tr>
        <td style="font-size: 15px;">

                <br><br><b>Horizontal</b> --> <code id="1">[miniorange_social_sharing]</code><i style= "width: 11px;height: 9px;padding-left:2px;padding-top:3px" class="mofa mofa-fw mofa-lg mofa-copy mo_copy copytooltip" onclick="copyToClipboard(this, '#1', '#shortcode_url1_copy')"><span id="shortcode_url1_copy" class="copytooltiptext">Copy to Clipboard</span></i></b><br><br>
                <b>Vertical</b> --> <code id="2">[miniorange_social_sharing_vertical]</code><i style= "width: 11px;height: 9px;padding-left:2px;padding-top:3px" class="mofa mofa-fw mofa-lg mofa-copy mo_copy copytooltip" onclick="copyToClipboard(this, '#2', '#shortcode_url2_copy')"><span id="shortcode_url2_copy" class="copytooltiptext">Copy to Clipboard</span></i>
                <!--Use [miniorange_social_sharing] Shortcode in the content of required page/post where you want to display horizontal Social Sharing Icons. Use [miniorange_social_sharing_vertical] shortcode for vertical Social Sharing Icons.--><br>

               <br>
                <h4>For Sharing Icons</h4>
                You can use  different attribute to customize social sharing icons. All attributes are optional.<br>
                <b>Example:</b> <code id="3" style="font-size: 14px"> [miniorange_social_sharing  shape="square" heading="Share with" color="#000000" fontcolor="blue" theme="customFont" space="14" size="30" url="https://www.miniorange.com"]</code><i style= "width: 11px;height: 9px;padding-left:2px;padding-top:3px" class="mofa mofa-fw mofa-lg mofa-copy mo_copy copytooltip" onclick="copyToClipboard(this, '#3', '#shortcode_url3_copy')"><span id="shortcode_url3_copy" class="copytooltiptext">Copy to Clipboard</span></i>
                <br><br>

                <h4 style="margin-bottom:0 !important">Common attributes - Horizontal and Vertical</h4>
                <b>shape</b>: round, roundededges, square<br>
                <b>theme</b>: default, custombackground, nobackground<br>
                <b>size</b>: Any value between 20 to 100<br>
                <b>space</b>: Any value between 0 to 50<br>
                <b>url</b>: Enter custom URL for sharing<br>
                <b>fontcolor</b>: Enter custom color for icons (only works with no background theme)<br>
                <b>sharecnt</b>: yes, no <b>*To see social share count*</b><br>
                <h4 style="margin-bottom:0 !important">Horizontal attributes</h4>
                <b>heading</b>: Enter custom heading text<br>
                <b>color</b>: Enter custom text color for heading eg: cyan, red, blue, orange, yellow <br>
                <br>
                <b>Vertical attributes</b><br>
                <b>alignment</b>: left,right<br>
                <b>topoffset</b>: Any value(height from top) between 0 to 1000<br>
                <b>rightoffset(Applicable if alignment is right)</b>: Any value between 0 to 200<br>
                <b>leftoffset(Applicable if alignment is left)</b>: Any value between 0 to 200<br>


        </td>
    </tr>
    </table>
    </div>
    <script>
        //to set heading name
        jQuery('#mo_openid_page_heading').text('Social Sharing Shortcode');

        //copy to clipboard
        function copyToClipboard(copyButton, element, copyelement) {
            var temp = jQuery("<input>");
            jQuery("body").append(temp);
            temp.val(jQuery(element).text()).select();
            document.execCommand("copy");
            temp.remove();
            jQuery(copyelement).text("Copied");
            jQuery(copyButton).mouseout(function(){
                jQuery(copyelement).text("Copy to Clipboard");
            });
        }
    </script>

<?php
}
?>