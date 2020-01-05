<?php

function mo_openid_share_cnt(){
?>
<form id="share_cnt" name="share_cnt" method="post" action="">
    <input type="hidden" name="option" value="mo_openid_share_cnt" />
    <input type="hidden" name="mo_openid_share_cnt_nonce"
           value="<?php echo wp_create_nonce( 'mo-openid-share-cnt-nonce' ); ?>"/>



    <div class="mo_openid_table_layout"><table style="width:100%">

            <tr>
                <td>

                    <p style="font-size: 15px;">Share counts are supported for Facebook, Vkontakte, Stumble Upon and Pinterest.</p>
                    <br>
                    <label class="mo_openid_checkbox_container"> <b style="font-size: 14px;">Enable share counts</b>
                        <input type="checkbox" id="share_count" name="mo_openid_share_count" value="1" <?php checked(get_option('mo_openid_share_count') == 1); ?> />
                        <span class="mo_openid_checkbox_checkmark"></span>
                    </label>
                    <br>
                    <input type="button" id="delete_count_transient" value="Delete Count Session" name="delete_count_transient" style="width:150px; margin-bottom: 0px" onclick="delete_transit()" class="button button-primary button-large"/>
                    <br><br>
                </td>
            </tr>
            <script>
                function delete_transit() {
                    var a = "<?php delete_transient('facebook');
                        delete_transient('vkontakte');
                        delete_transient('stumbleupon');
                        delete_transient('pinterest'); ?>";
                    location.reload();
                }
            </script>
            <tr>
                <td style="width: 100%; ">
                    <div class="sharecount " >
                        <ul class="share_count_icon">
                            <li>
                                <img style="height: 50px;width: 50px;" class="mo_sharing_icon_preview" id="mo_sharing_icon_preview_count_facebook" src="<?php echo plugin_url . 'facebook.png' ?>"/>
                                <span style='margin-left : <?php echo esc_attr(get_option('mo_sharing_icon_space')) ?>px !important'>12k</span>
                            </li>
                        </ul>
                        <div style="font-size: 14px;">
                            <b>Facebook Access Token</b> <input class="mo_openid_textfield_css" style="border: 1px solid ;border-color: #0867b2;width: 50%" type="text" name="mo_openid_Facebook_share_count_api" value="<?php echo esc_attr(get_option('mo_openid_Facebook_share_count_api')); ?>"><br/>
                            <p><b>Instructions to configure Facebook Share Counts:</b></p>
                            <ol>
                                <li>Go to <a href="https://developers.facebook.com/tools/explorer/" target="_blank">https://developers.facebook.com/tools/explorer/</a>. Sign in with your Facebook account.
                                </li>
                                <li>Use an existing app if you already have one or create a new facebook
                                    app by clicking on <b>Create App</b>. Go to <b>My Apps</b> and
                                    select <b>Create App</b>. Enter Display Name i.e App Name and click
                                    on <b>Create App ID</b>.
                                </li>
                                <li>Go to <b>Tools</b> select <b>Graph API Explorer</b> and click on <b>Get
                                        Access Token</b>.
                                </li>
                                <li>Now, go to <a href="https://developers.facebook.com/tools/accesstoken" target="_blank">Access Token Tool</a> and press <b>Debug</b> option at right side for the <b>User Token</b></li>
                                <li>Now copy the <b>Access Token</b> and paste it in the above field and
                                    click on <b>save</b>.
                                </li>
                            </ol>
                            <p class="note_style"><span  style="color: red">*</span><strong>According to the new updates of
                                    Facebook API it will expires after every 60 days. So to avoid any
                                    issues update it again before 60 days.</strong></p>
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td><br/><b><input type="submit" name="submit" value="Save" style="width:150px;background-color:#0867b2;color:white;box-shadow:none;text-shadow: none;"  class="button button-primary button-large" />
                    </b>
                </td>
            </tr>
        </table>
    </div>
</form>

    <script>
        function show_disable_options3(click_id){

            var span = jQuery('#' + click_id).find('span').attr('class');
            if (span.includes('dashicons-arrow-up')){
                jQuery('#mo_openid_h3_collapse3').find('span').removeClass( "dashicons-arrow-up" );
                jQuery('#mo_openid_h3_collapse3').find('span').addClass( "dashicons-arrow-down" );
            }
            else if(span.includes('dashicons-arrow-down')) {
                jQuery('#mo_openid_h3_collapse3').find('span').removeClass( "dashicons-arrow-down" );
                jQuery('#mo_openid_h3_collapse3').find('span').addClass( "dashicons-arrow-up" );

            }
            jQuery("#mo_openid_collapse3").slideToggle(400);

        }
    </script>
    <script>
        //to set heading name
        jQuery('#mo_openid_page_heading').text('Share Counts');
    </script>

    <?php
    }
    ?>
