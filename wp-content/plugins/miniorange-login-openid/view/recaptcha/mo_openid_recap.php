<?php
function mo_openid_configure_recaptcha(){
    ?>
    <form>
        <table style="padding: 2%" width="100%">
            <tr>
                <td>
                    <label class="mo_openid_checkbox_container_disable">Enable reCAPTCHA
                        <input  type="checkbox"/>
                        <span class="mo_openid_checkbox_checkmark_disable"></span>
                    </label>




                    <div>
                        <p class="note_style"><b>Prerequisite</b>: Before you can use reCAPTCHA, you need to register your domain/webiste. <a><b>Click here</b></a>.</p>
                        <p>Enter Site key and Secret key that you get after registration.</p>
                        <table style="width: 100%;">
                            <tr>
                                <td colspan="2" style="width:30%">Select type of reCAPTCHA :

                                    <label class="mo-openid-radio-container_disable">reCAPTCHA v3
                                        <input type="checkbox"  />
                                        <span class="mo-openid-radio-checkmark_disable"></span>
                                    </label>



                                    <label class="mo-openid-radio-container_disable">reCAPTCHA v2
                                        <input type="radio"  />
                                        <span class="mo-openid-radio-checkmark_disable"></span>
                                    </label>

                                </td>
                            </tr>
                            <tr>
                                <td style="width:15%">Site key  : </td>
                                <td style="width:85%"><input class="mo_openid_textfield_css" style="border: 1px solid ;border-color: #0867b2" type="text" placeholder="site key" disabled/></td>
                            </tr>
                            <tr>
                                <td>Secret key  : </td>
                                <td><input class="mo_openid_textfield_css" style="border: 1px solid ;border-color: #0867b2" type="text" disabled/></td>
                            </tr>
                            <tr id="mo_limit_recaptcha_for">
                                <td colspan="2" style="vertical-align:top;"><br><b>Enable reCAPTCHA for :</b></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label class="mo_openid_checkbox_container_disable">WordPress Login form
                                        <input  type="checkbox"/>
                                        <span class="mo_openid_checkbox_checkmark_disable"></span>
                                    </label>


                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">

                                    <label class="mo_openid_checkbox_container_disable">WordPress Registration form
                                        <input  type="checkbox"/>
                                        <span class="mo_openid_checkbox_checkmark_disable"></span>
                                    </label>


                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input disabled type="button" value="Save Settings" class="button button-primary button-large" />
                    <input disabled id="mo_limit_recaptcha_test" type="button" value="Test reCAPTCHA Configuration" class="button button-primary button-large" />
                </td>
            </tr>
        </table>
        <script>
            //to set heading name
            jQuery('#mo_openid_page_heading').text('Configure reCAPTCHA Settings');
            var temp = jQuery("<a style=\"left: 1%; padding:4px; position: relative; text-decoration: none\" class=\"mo-openid-premium\" href=\"<?php echo add_query_arg(array('tab' => 'licensing_plans'), $_SERVER['REQUEST_URI']); ?>\">PRO</a>");
            jQuery("#mo_openid_page_heading").append(temp);
            var win_height = jQuery('#mo_openid_menu_height').height();
            //win_height=win_height+18;
            jQuery(".mo_container").css({height:win_height});
        </script>

    </form>

    <?php
}