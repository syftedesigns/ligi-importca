<?php
function select_comment_app(){
    ?>
    <div class="mo_openid_table_layout">
        <table class="mo_openid_display_table">
            <tr>
                <td colspan="2">
                    <br>
                    <b>Select applications to add Social Comments. These commenting applications will be added to your blog post pages at the location of your comments.</b>
                </td>
            </tr>
        </table>
        <form id="comment_selectapp" name="comment_selectapp" method="post" action="" >
        <input type="hidden" name="option" value="mo_openid_comment_selectapp" />
        <input type="hidden" name="mo_openid_enable_comment_selectapp_nonce"
               value="<?php echo wp_create_nonce( 'mo-openid-enable-comment-selectapp-nonce' ); ?>"/>
        <table id="sel_app">
            <tr>
                <td>
                    <h3>Select Applications</h3>
                    If none of the below are selected, default WordPress comments will only be visible. Only selecting Default WordPress Comments will not result in any changes.
                </td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            </tr>
            <td>

                <label class="mo_openid_checkbox_container"> <b>Default WordPress Comments</b>
                    <input type="checkbox" id="mo_openid_social_comment_default" name="mo_openid_social_comment_default" value="1"  <?php checked( get_option('mo_openid_social_comment_default') == 1 );?> />
                    <span class="mo_openid_checkbox_checkmark"></span>
                </label>


            </td>
            </tr>
            <tr>
                <td>

                    <label class="mo_openid_checkbox_container"> <b>Facebook Comments</b>
                        <input type="checkbox" id="mo_openid_social_comment_fb" name="mo_openid_social_comment_fb" value="1" <?php checked( get_option('mo_openid_social_comment_fb') == 1 );?> />
                        <span class="mo_openid_checkbox_checkmark"></span>
                    </label>


                </td>
            </tr>
        </table>
        <div><br/> <br/>
            <input type="submit" name="submit" value="Save" style="width:150px;text-shadow: none;background-color:#0867b2;color:white;box-shadow:none;"  class="button button-primary button-large" />

        </div>
        </form>
    </div>
    <script>
        jQuery('#mo_openid_page_heading').text('Social Comments');
    </script>
<?php }
?>