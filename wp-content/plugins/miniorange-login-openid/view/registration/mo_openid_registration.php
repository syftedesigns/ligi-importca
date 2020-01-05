<?php
function mo_openid_registration()
{
    ?>
    <form id="registration" name="registration" method="post" action="">
        <input type="hidden" name="option" value="mo_openid_enable_registration" />
        <input type="hidden" name="mo_openid_enable_registration_nonce" value="<?php echo wp_create_nonce( 'mo-openid-enable-registration-nonce' ); ?>"/>
        <div class="mo_openid_table_layout">
            <h3>Auto Registration</h3>
            <div>
                <label class="mo_openid_checkbox_container">Auto-register users.
                    <input style="font-size: 16px;" type="checkbox" id="auto_register_enable" name="mo_openid_auto_register_enable" value="1"
                        <?php checked( get_option('mo_openid_auto_register_enable') == 1 );?> /><b style="font-size: 15px;"></b>                    <span class="mo_openid_checkbox_checkmark"></span>
                </label>
                Registration disabled message:
                <input type="text" class="mo_openid_textfield_css" style="border: 1px solid ;border-color: #0867b2;width: 80%" id="auto_register_disabled_message" name="mo_openid_register_disabled_message" value="<?php echo esc_textarea(get_option('mo_openid_register_disabled_message'))?>" />
                <label style="cursor: auto" class="note_style">If Auto-register users is unchecked, users will not be able to register using Social Login. The users who already have an account will be able to login.  This setting stands true only when users are registering using Social Login. This will not interfere with users registering through the regular WordPress registration form.</label>
            </div>
            <br><hr>
            <h3>Role Mapping</h3>
            <div>
                Universal Role:
                <select name="mapping_value_default" style="margin-left: 2%; color: #000000;width:20%;font-size: 15px; background-color: #d4d7ee" id="default_group_mapping">                    <?php
                    if(get_option('mo_openid_login_role_mapping'))
                        $default_role = get_option('mo_openid_login_role_mapping');
                    else
                        $default_role = get_option('default_role');
                    wp_dropdown_roles($default_role); ?>
                </select>
                <label style="cursor: auto" class="note_style"> Use Role Mapping to assign this role to the all users registering through Social Login. According to the role mapped user will be granted role on the website.</label>
            </div><br><hr>
            <h3>Enable Email Notification to Admin</h3>
            <div>
                <label class="mo_openid_checkbox_container">Enable Email Notification to Admin - on User Registration
                    <input style="font-size: 16px;" type="checkbox" id="mo_openid_email_enable" name="mo_openid_email_enable" value="1"
                        <?php checked( get_option('mo_openid_email_enable') == 1 );?> /><b style="font-size: 15px;"></b><span class="mo_openid_checkbox_checkmark"></span>
                </label>
                <label style="cursor: auto" class="note_style">This feature requires SMTP to be configured.</label>
            </div>
            <br/><hr>
            <h3>Set Display Picture for User</h3>
            <div>
                <label class="mo_openid_checkbox_container">Set Display Picture for User - on User Registration
                    <input style="font-size: 16px;" type="checkbox" id="moopenid_social_login_avatar" name="moopenid_social_login_avatar" value="1"
                        <?php checked( get_option('moopenid_social_login_avatar') == 1 );?> /><b style="font-size: 15px;"></b><span class="mo_openid_checkbox_checkmark"></span>
                </label>
            </div>
            <br/><b><input type="submit" name="submit" value="Save" style="width:150px;text-shadow: none;background-color:#0867b2;color:white;box-shadow:none;"  class="button button-primary button-large" /></b>
        </div>
    </form>
    <script>
        //to set heading name
        jQuery('#mo_openid_page_heading').text('Registration Options');
    </script>
    <?php
}
