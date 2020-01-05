<?php
function mo_openid_licensing_plans(){
    ?>

    <div style="min-height:1050px; padding: 1%">
        <div class="grid">
            <div class="col100 red">
                <table class="table mo_table-bordered-license mo_table-striped-license">
                    <thead>
                    <tr style="background-color:#F5F5F5;">
                        <th><br><h1><font color="#00CED1">FREE</font></h1>
                            <h3><font color="#000000">(YOU ARE ON THIS PLAN)</font></h3>
                            <h1>    <img src="<?php echo plugin_dir_url(dirname(dirname(__FILE__)));?>includes/images/dollar.png" style="width:20px;height:20px;">0</h1><h3>Features/ Plan</h3></th>
                    </tr>
                    <tr>
                        <th><button class="button-plan" onclick="mo_openid_support_form()">Contact us for more features</button></th>
                    </tr>
                    </thead>
                    <tbody class="mo_align-center mo-fa-icon">
                    <tr>
                        <td><div class="tooltip" style="padding-left: 25px;">9 Pre-configured Social Login Apps <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"></i><span class="tooltiptext"style="width:100%;">Pre-configured apps are already configured by miniOrange. Login flow will go from plugin to miniOrange and then back to plugin.<br> 9 pre-configured apps are<span id="mo_openid_dots">...</span><span id="mo_openid_more" style="display: none"><br>  google,vkontakte,twitter,linkedin,amazon,<br>windowslive,salesforce,yahoo and instagram.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots','mo_openid_more','mo_openid_myBtn')" id="mo_openid_myBtn">Read more</button>
                            </div></td>
                    </tr>
                    <tr>
                        <td><div class="tooltip" style="padding-left: 37px;">10 Custom Social Login Apps <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"></i><span class="tooltiptext"style="width:100%;"> Using the custom app tab, you can set up your own app id and secret in the plugin. Login flow will not involve miniOrange in between. Login flow will go from plugin to social media application and then back to plugin.<br>10 custom apps are <span id="mo_openid_dots1">...</span><span id="mo_openid_more1" style="display:none" ><br>Facebook,Google,vkontakte,twitter,linkedin,<br>amazon,windowslive,salesforce,yahoo and instagram.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots1','mo_openid_more1','mo_openid_myBtn1')" id="mo_openid_myBtn1">Read more</button>
                            </div></td>
                    </tr>
                    <tr>
                        <td>Beautiful Icon Customisations</td>
                    </tr>
                    <tr>
                        <td>16 Social Sharing Apps</td>
                    </tr>
                    <tr>
                        <td>Facebook Social Comments</td>
                    </tr>
                    <tr>
                        <td>Login Redirect URL</td>
                    </tr>
                    <tr>
                        <td> Logout Redirect URL</td>
                    </tr>
                    <tr>
                        <td>Profile completion (username, email)</td>
                    </tr>
                    <tr>
                        <td>Profile Picture</td>
                    </tr>
                    <tr>
                        <td>Email notification to admin</td>
                    </tr>
                    <tr>
                        <td>Customizable Text For Login Icons</td>
                    </tr>
                    <tr>
                        <td>Option to enable/disable user registration </td>
                    </tr>
                    <tr>
                        <td>Basic Email Support</td>
                    </tr>
                    <tr>
                        <td>Role Mapping</td>
                    </tr>
                    <tr>
                        <td>Shortcodes to display social icons on<br/>any login page, post, popup and php pages</td>
                    </tr>
                    <tr>
                        <td><a onclick="mo_openid_support_form(this)">Click here to Contact Us</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div style="width: -1%;"></div>
            <div class="col300 red">
                <table class="table mo_table-bordered-license mo_table-striped-license">
                    <thead>
                    <tr style="background-color:#F5F5F5;">
                        <th><br><h1><font color="#00000">STANDARD</font></h1>
                            <br/>
                            <h1>
                                <strike><img
                                            src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png"
                                            style="width:20px;height:20px;">29</strike> <img
                                        src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png"
                                        style="width:20px;height:20px;">19</h1>
                            <h3>Features/ Plan</h3></th>
                    </tr>
                    <tr>
                        <th><button
                                    onclick="mosocial_addonform('wp_social_login_standard_plan')"
                                    id="mosocial_purchase_cust_addon"
                                    class="button-plans">Upgrade Now</button></th>
                    </tr>
                    </thead>
                    <tbody class="mo_align-center mo-fa-icon">
                    <tr>
                        <td><b>All Free features +</b></td>
                    </tr>
                    <tr>
                        <td><div class="tooltip" style="padding-left: 40px;">24 Custom Social Login Apps <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"></i><span class="tooltiptext"style="width:100%;"> Using the custom app tab, you can set up your own app id and secret in the plugin. Login flow will not involve miniOrange in between. Login flow will go from plugin to social media application and then back to plugin.<br>24 custom apps are <span id="mo_openid_dots3">...</span><span id="mo_openid_more3" style="display:none" ><br>Facebook,Google,vkontakte,twitter,linkedin,<br>amazon,windowslive,salesforce,yahoo,apple,<br>instagram,wordpress,disqus,pinterest,spotify,<br>tumblr,
                                                                          twitch,vimeo,kakao,discord,<br>dirbble,flickr,line,meetup and stackexchange.</span><button style="border:transparent;background-color: transparent;color: tomato;" onclick="myFunction('mo_openid_dots3','mo_openid_more3','mo_openid_myBtn3')" id="mo_openid_myBtn3">Read more</button>
                            </div></td>
                    </tr>
                    <tr>
                        <td>Advance Account Linking</td>
                    </tr>
                    <tr>
                        <td>General Data Protection Regulation (GDPR)</td>
                    </tr>
                    <tr>
                        <td>BuddyPress Display Options</td>
                    </tr>
                    <tr>
                        <td>Woocommerce Display Options</td>
                    </tr>
                    <tr>
                        <td>Email notification to multiple admins</td>
                    </tr>
                    <tr>
                        <td>Welcome Email to end users</td>
                    </tr>
                    <tr>
                        <td>Customizable Email Notification template</td>
                    </tr>
                    <tr>
                        <td>Customizable welcome Email template</td>
                    </tr>
                    <tr>
                        <td>Social Login Opens in a New Window</td>
                    </tr>
                    <tr>
                        <td>Domain restriction </td>
                    </tr>
                    <tr>
                        <td>Force Admin To Login Using Password</td>
                    </tr>
                    <tr>
                        <td>Send username and password reset link</td>
                    </tr>
                    <tr>
                        <td>OTP Integration</td>
                    </tr>
                    <tr>
                        <td>Disable admin bar</td>
                    </tr>
                    <tr>
                        <td>Google recaptcha</td>
                    </tr>
                    <tr>
                        <td><a onclick="mo_openid_support_form(this)">Click here to Contact Us</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div style="width: -1%;"></div>
            <div class="col100 red">
                <table class="table mo_table-bordered-license mo_table-striped-license" style="width: 80%">
                    <thead>
                    <tr style="background-color:#F5F5F5;">
                        <th><br><h1><font color="#00CED1">PREMIUM</font></h1><h3><font color="#ff6347">Popular Plugins Integration</font></h3>
                            <h1>
                                <strike><img
                                            src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png"
                                            style="width:20px;height:20px;">59</strike> <img
                                        src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png"
                                        style="width:20px;height:20px;">49</h1>
                            <h3>Features/ Plan</h3></th>
                    </tr>
                    <tr>
                        <th><button
                                    onclick="mosocial_addonform('wp_social_login_premium_plan')"
                                    id="mosocial_purchase_cust_addon"
                                    class="button-plan">Upgrade Now</button></th>
                    </tr>
                    </thead>
                    <tbody class="mo_align-center mo-fa-icon">
                    <tr>
                        <td><b>All Free features +</b></td>
                    </tr>
                    <tr>
                        <td><b>All Standard features +</b></td>
                    </tr>
                    <tr>
                        <td><span class="tooltip">Custom attribute mapping <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="tooltiptext"style="width:100%;">Extended attributes returned from social app are mapped to Custom attributes created by admin. These Attributes get stored in user_meta.</span>
                    </tr>
                    <tr>
                        <td>Paid Membership pro Integration</td>
                    </tr>
                    <tr>
                        <td><div class="tooltip" style="padding-left: 70px;">BuddyPress Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="tooltiptext" style="width:100%;"> Extended attributes returned from social app are mapped to Custom BuddyPress fields. Profile picture from social media is mapped to Buddypress avatar.</span>
                    </tr>
                    <tr>
                        <td><div class="tooltip" style="padding-left: 60px;">Woocommerce Integration <i class="mofa mofa-commenting" style="font-size:18px;color:#85929E"></i> <span class="tooltiptext"style="width:100%;"> First name, last name and email are pre-filled in billing details of a user and on the Woocommerce checkout page. Social Login icons are displayed on the Woocommerce checkout page.</span>
                    </tr>
                    <tr>
                        <td><div class="tooltip" style="padding-left: 70px;">MailChimp Integration <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="tooltiptext" style="width:100%;">A user is added as a subscriber to a mailing list in MailChimp when that user registers using Social Login. First name, last name and email are also captured for that user in the Mailing List. Option is available to download csv file that has list of emails of all users in WordPress.</span>
                    </tr>
                    <tr>
                        <td><div class="tooltip" style="padding-left: 70px;">Extended Profile Data <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="tooltiptext" style="width:100%;">Extended profile data feature requires additional configuration. You need to have your own social media app and permissions from social media providers to collect extended user data.</span>
                    </tr>
                    <tr>
                        <td><div class="tooltip" style="padding-left: 80px;">Custom Integration  <i class="mofa mofa-commenting " style="font-size:18px;color:#85929E"> </i><span class="tooltiptext" style="width:100%;"> If you have a specific custom requirement in the Social Login Plugin, we can implement and integrate it in the Plugin fo you. This includes all those custom features that come under the scope of Social Login/ Sharing/ Comments and impart additional value to the plugin. These features are chargeable. Please send us a query through the support forum to get in touch with us about your custom requirements.</span></div></td>
                    </tr>
                    <tr>
                        <td><a onclick="mo_openid_support_form(this)">Click here to Contact Us</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="font-size: medium; padding: 1%">
        <hr><h3>Available Add on</h3>
        <a style="text-decoration: none" target="_blank" href="<?php echo get_site_url() . "/wp-admin/admin.php?page=mo_openid_settings_addOn";?> ">Social Login Custom Registration Form Add on</a>
        <button style="margin-left: 2%; margin-top: -.5%" onclick="mosocial_addonform('wp_social_login_extra_attributes_addon')" id="mosocial_purchase_cust_addon" class="button button-primary button-large">Upgrade Now</button>
        <p>Custom Registration Form Add-On helps you to integrate details of new as well as existing users. You can add as many fields as you want including the one which are returned by social sites at time of registration.</p>
    </div>
    <div class="clear" style="padding: 1%">
        <hr>
        <h3>Refund Policy -</h3>
        <p><b>At miniOrange, we want to ensure you are 100% happy with your purchase. If the premium plugin you purchased is not working as advertised and you've attempted to resolve any issues with our support team, which couldn't get resolved then we will refund the whole amount within 10 days of the purchase. Please email us at <a href="mailto:info@xecurify.com"><i>info@xecurify.com</i></a> for any queries regarding the return policy.</b></p>
        <b>Not applicable for -</b>
        <ol>
            <li>Returns that are because of features that are not advertised.</li>
            <li>Returns beyond 10 days.</li>
        </ol>
    </div>
    <script>
        function myFunction(dots_id,read_id,btn_id) {

            var dots = document.getElementById(dots_id);
            var moreText = document.getElementById(read_id);
            var btnText = document.getElementById(btn_id);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Close";
                moreText.style.display = "inline";
            }
        }
    </script>

    <style>
        div.grid      { width: 100%; }
        div.grid div  { float: left; height: 10px; }
        div.col100    { width: 33%; }
        div.col300    { width: 33%; }
        div.clear     { clear: both; }

        .mo_table-bordered-license, .mo_table-bordered-license>tbody>tr{
            border: 1px solid #ddd;
            height: 40px;
            box-shadow: 0px 1px #ddd;
            /*margin-left:25%; */
        }

        .mo_table-bordered-license>thead>tr>th{
            vertical-align:top !important;
        }

        .button-plan {
            background-color: #00CED1;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            cursor: pointer;
            width: 100%;
        }
        .button-plans {
            background-color: #000000;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .highlight{
            background-color:#0867b2;
            padding: 30px 30px 30px 30px;
            color: #fff;
        }
        .tooltip {
            position: relative;
            display: inline-block;
            opacity:1;


        }
        .tooltip .tooltiptext {
            padding:15px 20px 20px 20px;
            visibility: hidden;
            width: 20px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            left: 50%;
            margin-left: -160px;

        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 60%;
            margin-left: -60px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent black transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }

        .tooltip .tooltiptext1 {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding:10px 5px 5px 5px;
            position: absolute;
            z-index: 1;
            top: 150%;
            left: 50%;
            margin-left: -60px;


        }

        .tooltip .tooltiptext1::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent black transparent;
        }

        .tooltip:hover .tooltiptext1 {
            visibility: visible;
        }
    </style>
    <script>
        //to set heading name
        jQuery('#mo_openid_page_heading').text('Licensing Plan For Social Login');
    </script>
    <form style="display:none;" id="mosocial_loginform" action="<?php echo get_option( 'mo_openid_host_name' ) . '/moas/login'; ?>"
          target="_blank" method="post" >
        <input type="email" name="username" value="<?php echo esc_attr(get_option('mo_openid_admin_email')); ?>" />
        <input type="text" name="redirectUrl" value="<?php echo esc_attr(get_option( 'mo_openid_host_name')).'/moas/initializepayment'; ?>" />
        <input type="text" name="requestOrigin" id="requestOrigin"/>
    </form>
    <script>
        function mosocial_addonform(planType) {
            jQuery.ajax({
                url: "<?php echo admin_url("admin-ajax.php");?>", //the page containing php script
                method: "POST", //request type,
                dataType: 'json',
                data: {
                    action: 'mo_register_customer_toggle_update',
                },
                success: function (result) {
                    if(result.status){
                        jQuery('#requestOrigin').val(planType);
                        jQuery('#mosocial_loginform').submit();
                    }
                    else
                    {
                        alert("It seems you are not registered with miniOrange. Please login or register with us to upgrade to premium plan.");
                        window.location.href="<?php echo site_url()?>".concat("/wp-admin/admin.php?page=mo_openid_general_settings&tab=profile");
                    }
                }
            });
        }
    </script>
    <?php
}

function mo_openid_licensing_plans_addon()
{
    ?>
    <td style="vertical-align:top;width:100%;">
        <div class="mo_openid_table_layout" style="min-height:625px; margin-left: 6%">
            <div class="grid">
                <div style="width: 25%;"></div>
                <div class="col100 red">
                    <table class="table mo_table-bordered-license mo_table-striped-license" style="width: 150%;">
                        <thead>
                        <tr style="background-color:#F5F5F5;">
                            <th width="400px;"><br>
                                <h1><font color="#00CED1">Custom Registration Form</font></h1>
                                <h1><font color="#00CED1">Add-On</font></h1>
                                <h1>
                                    <strike><img
                                                src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png"
                                                style="width:20px;height:20px;">19</strike> <img
                                            src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))); ?>includes/images/dollar.png"
                                            style="width:20px;height:20px;">9</h1>
                                <h3>Features/ Plan</h3></th>
                        </tr>
                        <tr>
                            <th><button
                                        onclick="mosocial_addonform('wp_social_login_extra_attributes_addon')"
                                        id="mosocial_purchase_cust_addon"
                                        class="button-plan">Upgrade Now</button></th>
                        </tr>
                        </thead>
                        <tbody class="mo_align-center mo-fa-icon">
                        <tr>
                            <td>Map users data which is returned from social apps</td>
                        </tr>
                        <tr>
                            <td>Create a pre-registration form</td>
                        </tr>
                        <tr>
                            <td>The form can support any theme</td>
                        </tr>
                        <tr>
                            <td>Ability to add custom fields in the registration form</td>
                        </tr>
                        <tr>
                            <td>Edit Profile option using shortcode</td>
                        </tr>
                        <tr>
                            <td>Support input field types: text, date, checkbox or dropdown</td>
                        </tr>
                        <tr>
                            <td>Optional mandatory fields</td>
                        </tr>
                        <tr>
                            <td>Synchronization existing meta field</td>
                        </tr>
                        <tr>
                            <td><a target="_blank"
                                   href="<?php echo get_site_url() . "/wp-admin/admin.php?page=mo_openid_settings&tab=login"; ?> ">Contact
                                    Us using Support Form</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="clear">
            <hr>
            <h3>Refund Policy -</h3>
            <p><b>At miniOrange, we want to ensure you are 100% happy with your purchase. If the premium plugin you
                    purchased is not working as advertised and you've attempted to resolve any issues with our support
                    team, which couldn't get resolved then we will refund the whole amount within 10 days of the
                    purchase. Please email us at <a href="mailto:info@xecurify.com"><i>info@xecurify.com</i></a> for any
                    queries regarding the return policy.</b></p>
            <b>Not applicable for -</b>
            <ol>
                <li>Returns that are because of features that are not advertised.</li>
                <li>Returns beyond 10 days.</li>
            </ol>
        </div>
        <style>
            div.grid {
                width: 850px;
            }

            div.grid div {
                float: left;
                height: 10px;
            }

            div.col100 {
                width: 250px;
            }

            div.col200 {
                width: 50px;
            }

            div.col300 {
                width: 250px;
            }

            div.clear {
                clear: both;
            }

            .mo_table-bordered-license, .mo_table-bordered-license > tbody > tr {
                border: 1px solid #ddd;
                height: 40px;
                box-shadow: 0px 1px #ddd;
                /*margin-left:25%; */
            }

            .mo_table-bordered-license > thead > tr > th {
                vertical-align: top !important;
            }

            .button-plan {
                background-color: #00CED1;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 15px;
                cursor: pointer;
                width: 360px;
            }

            .button-plans {
                background-color: #000000;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
                width: 280px;
            }

            .highlight {
                background-color: #0867b2;
                padding: 30px 30px 30px 30px;
                color: #fff;
            }

            .tooltip {
                position: relative;
                display: inline-block;
                opacity: 1;


            }

            .tooltip .tooltiptext {
                padding: 15px 20px 20px 20px;
                visibility: hidden;
                width: 20px;
                background-color: black;
                color: #fff;
                text-align: center;
                border-radius: 6px;
                position: absolute;
                z-index: 1;
                left: 50%;
                margin-left: -160px;

            }

            .tooltip .tooltiptext::after {
                content: "";
                position: absolute;
                bottom: 100%;
                left: 60%;
                margin-left: -60px;
                border-width: 5px;
                border-style: solid;
                border-color: transparent transparent black transparent;
            }

            .tooltip:hover .tooltiptext {
                visibility: visible;
            }

            .tooltip .tooltiptext1 {
                visibility: hidden;
                width: 120px;
                background-color: black;
                color: #fff;
                text-align: center;
                border-radius: 6px;
                padding: 10px 5px 5px 5px;
                position: absolute;
                z-index: 1;
                top: 150%;
                left: 50%;
                margin-left: -60px;


            }

            .tooltip .tooltiptext1::after {
                content: "";
                position: absolute;
                bottom: 100%;
                left: 50%;
                margin-left: -5px;
                border-width: 5px;
                border-style: solid;
                border-color: transparent transparent black transparent;
            }

            .tooltip:hover .tooltiptext1 {
                visibility: visible;
            }
        </style>
        <script>
            //to set heading name
            jQuery('#mo_openid_page_heading').text('Licensing Plan For Social Login');
        </script>
    <td>
        <form style="display:none;" id="mosocial_loginform" action="<?php echo get_option( 'mo_openid_host_name' ) . '/moas/login'; ?>"
              target="_blank" method="post" >
            <input type="email" name="username" value="<?php echo esc_attr(get_option('mo_openid_admin_email')); ?>" />
            <input type="text" name="redirectUrl" value="<?php echo esc_attr(get_option( 'mo_openid_host_name')).'/moas/initializepayment'; ?>" />
            <input type="text" name="requestOrigin" id="requestOrigin"/>
        </form>
    </td>
    <?php
}