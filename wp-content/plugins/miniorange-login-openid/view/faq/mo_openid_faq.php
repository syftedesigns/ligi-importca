<?php

function mo_openid_faq(){ ?>
    <div class="mo_openid_table_layout">
        <table width="100%" style="padding-left: 20px">
            <tbody>
                <tr>
                    <td>
                        <p>If you are unable to open any section, press CTRL + F5 to clear cache.<p>
                        <h3><a  id="openid_question_plugin" class="mo_openid_title_panel" onclick="show_faq_options(this.id)"><span class="dashicons dashicons-arrow-right"></span>Site Issue</a></h3>
                        <div class="mo_openid_help_desc" hidden="" id="openid_question_plugin_desc">
                            <h4><a  id="openid_question14">I installed the plugin and my website stopped working. How can I recover my site?</a></h4>
                            <div  id="openid_question14_desc">
                                There must have been a server error on your website. To get your website back online:<br/>
                                <ol>
                                    <li>Open FTP access and look for plugins folder under wp-content.</li>
                                    <li>Change the extension folder name miniorange-login-openid to miniorange-login-openid1</li>
                                    <li>Check your website. It must have started working.</li>
                                    <li>Change the folder name back to miniorange-login-openid.</li>
                                </ol>
                            </div>
                            For any further queries, please submit a query on right hand side in our <b>Support Section</b>.
                        </div>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><a  id="openid_question_email" class="mo_openid_title_panel" onclick="show_faq_options1(this.id)"><span class="dashicons dashicons-arrow-right"></span>Change email </a></h3>
                        <div class="mo_openid_help_desc" hidden="" id="openid_question_email_desc">
                            <h4><a  id="openid_question20">I want to change the email address with which I access my account. How can I do that?</a></h4>
                            <div  id="openid_question20_desc">
                                You will have to register in miniOrange again with your new email id.
                                Please deactivate and activate the plugin by going to <strong>Plugins -> Installed Plugins</strong> and then go to the Social Login Plugin to register again. This will enable you to access miniOrange dashboard with new email address.</div><br/>
                            For any further queries, please submit a query on right hand side in our <b>Support Section</b>.
                        </div>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><a id="openid_question_curl" class="mo_openid_title_panel" onclick="show_faq_options2(this.id)"><span class="dashicons dashicons-arrow-right"></span> cURL </a></h3>
                        <div class="mo_openid_help_desc" hidden="" id="openid_question_curl_desc">
                            <h4><a  id="openid_question1"  >How to enable PHP cURL extension? (Pre-requisite)</a></h4>
                            <div  id="openid_question1_desc">
                                cURL is enabled by default but in case you have disabled it, follow the steps to enable it
                                <ol>
                                    <li>Open php.ini(it's usually in /etc/ or in php folder on the server).</li>
                                    <li>Search for extension=php_curl.dll. Uncomment it by removing the semi-colon( ; ) in front of it.</li>
                                    <li>Restart the Apache Server.</li>
                                </ol>
                                For any further queries, please submit a query on right hand side in our <b>Support Section</b>.
                            </div>
                            <hr>
                            <h4><a  id="openid_question9"  >I am getting error - curl_setopt(): CURLOPT_FOLLOWLOCATION cannot be activated when an open_basedir is set</a></h4>
                            <div   id="openid_question9_desc">
                                Just setsafe_mode = Off in your php.ini file (it's usually in /etc/ on the server). If that's already off, then look around for the open_basedir in the php.ini file, and change it to open_basedir = .
                            </div>
                        </div>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><a  id="openid_question_otp" class="mo_openid_title_panel"  onclick="show_faq_options3(this.id)"> <span class="dashicons dashicons-arrow-right"></span>OTP and Forgot Password </a></h3>
                        <div class="mo_openid_help_desc" hidden="" id="openid_question_otp_desc">
                            <h4><a  id="openid_question7"  >I did not recieve OTP. What should I do?</a></h4>
                            <div  id="openid_question7_desc">
                                The OTP is sent as an email to your email address with which you have registered with miniOrange. If you can't see the email from miniOrange in your mails, please make sure to check your SPAM folder. <br/><br/>If you don't see an email even in SPAM folder, please verify your account using your mobile number. You will get an OTP on your mobile number which you need to enter on the page. If none of the above works, please contact us using the Support form on the right.
                            </div>
                            <hr>
                            <h4><a  id="openid_question8"  >After entering OTP, I get Invalid OTP. What should I do?</a></h4>
                            <div  id="openid_question8_desc">
                                Use the <b>Resend OTP</b> option to get an additional OTP. Plese make sure you did not enter the first OTP you recieved if you selected <b>Resend OTP</b> option to get an additional OTP. Enter the latest OTP since the previous ones expire once you click on Resend OTP. <br/><br/>If OTP sent on your email address are not working, please verify your account using your mobile number. You will get an OTP on your mobile number which you need to enter on the page. If none of the above works, please contact us using the Support form on the right.
                            </div>
                            <hr>
                            <h4><a  id="openid_question5" >I forgot the password of my miniOrange account. How can I reset it?</a></h4>
                            <div  id="openid_question5_desc">
                                There are two cases according to the page you see -<br><br/>
                                1. <b>Login with miniOrange</b> screen: You should click on <b>forgot password</b> link. You will get your new password on your email address which you have registered with miniOrange . Now you can login with the new password.<br><br/>
                                2. <b>Register with miniOrange</b> screen: Enter your email ID and any random password in <b>password</b> and <b>confirm password</b> input box. This will redirect you to <b>Login with miniOrange</b> screen. Now follow first step.
                            </div>
                        </div>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><a  id="openid_question_login" class="mo_openid_title_panel" onclick="show_faq_options4(this.id)"><span class="dashicons dashicons-arrow-right"></span>Social login </a></h3>
                        <div class="mo_openid_help_desc" hidden="" id="openid_question_login_desc">
                            <h4><a id="openid_question2"  >How to add login icons to frontend login page?</a></h4>
                            <div id="openid_question2_desc">
                                You can add social login icons to frontend login page using our shortcode [miniorange_social_login]. Refer to 'Shortcode' tab to add customizations to Shortcode.
                            </div>
                            <hr>
                            <h4><a id="openid_question4"  >How can I put social login icons on a page without using widgets?</a></h4>
                            <div id="openid_question4_desc">
                                You can add social login icons to any page or custom login page using 'social login shortcode' [miniorange_social_login]. Refer to 'Shortcode' tab to add customizations to Shortcode.
                            </div>
                            <hr>
                            <h4><a  id="openid_question12" >Social Login icons are not added to login/registration form.</a></h4>
                            <div  id="openid_question12_desc">
                                Your login/registration form may not be wordpress's default login/registration form. In this case you can add social login icons to custom login/registration form using 'social login shortcode' [miniorange_social_login]. Refer to 'Shortcode' tab to add customizations to Shortcode.
                            </div>
                            <hr>
                            <h4><a  id="openid_question3"  >How can I redirect to my blog page after login?</a></h4>
                            <div  id="openid_question3_desc">
                                You can select one of the options from <b>Redirect URL after login</b> of <b>Display Option</b> section under <b>Social Login</b> tab. <br>
                                1. Same page where user logged in <br>
                                2. Homepage <br>
                                3. Account Dsahboard <br>
                                4. Custom URL - Example: https://www.example.com <br>
                            </div>
                            <hr>
                            <h4><a  id="openid_question11"  >After logout I am redirected to blank page</a></h4>
                            <div  id="openid_question11_desc">
                                Your theme and Social Login plugin may conflict during logout. To resolve it you need to uncheck <b>Enable Logout Redirection</b> checkbox under <b>Display Option</b> of <b>Social Login</b> tab.
                            </div>
                            <hr>
                            <h4><a  id="openid_question5"  >My users get the following message -"Registration has been disabled for this site. Please contact your administrator." What should I do?</a></h4>
                            <div  id="openid_question5_desc">
                                This means you must have unchecked the check-box of auto-register in the Social Login tab. Please check it. This will allow new users to be able to register to your site.
                            </div>
                            <hr>
                            <h4><a  id="openid_question7"  >Why do my users get a message that it is not secure to proceed?</a></h4>
                            <div  id="openid_question7_desc">Your website must be starting with http://. Now generally that's not an issue but our service uses https://( s stands for secure). You get a warning from the browser that the information is being passed insecurely. This happens after you log in to social media application and are coming back to your website. The warning is triggered from the browser since the data passes from https:// to http://, i.e. from a secure site to non-secure site.<br><br>We make sure that the information(email, name, username) getting passed from social media application to your website is encrypted with a key which is unique to you. So, even if the there is a warning of sending information without security, that information is encrypted. <br><br>
                                <strong>To remove this warning, you can add an SSL certificate to your website to change it to https OR use your own <a href="admin.php?page=mo_openid_settings&tab=custom_app"></strong>Custom App</a>
                            </div>
                            <hr>
                            <h4><a  id="openid_question1"  >My users get the following message -"There was an error in registration. Please contact your administrator." What should I do?</a></h4>
                            <div  id="openid_question1_desc">
                                This message is thrown by WordPress when there is an error in user-registration. <br><br>
                                1. To see the actual error thrown by WordPress, go to \wordpress\wp-content\plugins\miniorange-login-openid\class-mo-openid-login-widget.php file  <br>
                                2. Search for the line :<br/><code> //print_r($user_id); </code> <br>
                                3. Change it to <br/> <code>print_r($user_id); </code><br>
                                4. Save the file and try logging again. Please send us the error you see while logging in through the support forum to your right.
                            </div>
                            <h4><a  id="openid_question6"  >How do I centre the social login icons?</a></h4>
                            <div  id="openid_question6_desc">
                                1.If you are making changes to a PHP file.<br/><br/>
                                Go to the PHP file which invokes your page/post and insert the following html snippet. Also, increase the margin-left value as per your requirement. Save the file. <br>
                                <code>&ltdiv style="margin-left:100px;"&gt <br>&lt?php echo do_shortcode('[miniorange_social_login]')?&gt <br>
                                    &lt/div&gt </code><br/><br/>
                                2.If you are making changes to an HTML file.<br/><br/>
                                Go to the HTML file which invokes your page/post and insert the following html snippet. Also, increase the margin-left value as per your requirement. Save the file. <br>
                                <code>&ltdiv style="margin-left:100px;"&gt <br>[miniorange_social_login]')<br>
                                    &lt/div&gt </code>
                            </div>
                        </div>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><a  id="openid_question_sharing" class="mo_openid_title_panel" onclick="show_faq_options5(this.id)"><span class="dashicons dashicons-arrow-right"></span>Social Sharing</a></h3>
                        <div class="mo_openid_help_desc" hidden="" id="openid_question_sharing_desc">
                            <h4><a id="openid_question6"  >Is it possible to show sharing icons below the post content?</a></h4>
                            <div id="openid_question6_desc">
                                You can put social sharing icons before the content, after the content or both before and after the content. Go to <b>Sharing tab</b> , check <b>Blog post</b> checkbox and select one of three(before, after, both) options available. Save settings.
                            </div>
                            <hr>
                            <h4><a id="openid_question10" >Why is sharing with some applications not working?</a></h4>
                            <div id="openid_question10_desc">
                                This issue arises if your website is not publicly hosted. Facebook, for example looks for the URL to generate its preview for sharing. That does not work on localhost or any privately hosted URL.
                            </div>
                            <hr>
                            <h4><a id="openid_question13" >Facebook sharing is showing the wrong image. How do I change the image?</a></h4>
                            <div id="openid_question13_desc">
                                The image is selected by Facebook and it is a part of Facebook sharing feature. We provide Facebook with webpage URL. It generates the entire preview of webpage using that URL.<br/><br/>
                                To set an image for the page, set it as a meta tag in <head> of your webpage.<br/>
                                    <b>< meta property="og:image" content="http://example.com/image.jpg" ></b><br/><br/>
                                    You can further debug the issue with Facebook's tool - <a href="https://developers.facebook.com/tools/debug/og/object">https://developers.facebook.com/tools/debug/og/object</a>
                                    <br/><br/>
                                    If the problem still persists, please contact us using the Support form on the right.
                            </div>
                            <hr>
                            <h4><a id="openid_question21" >There is no option of Instagram in Social Sharing. Why?</a></h4>
                            <div id="openid_question21_desc">
                                Instagram has made a conscious effort to not allow sharing from external sources to fight spam and low quality photos.
                                At this point of time, uploading via Instagram's API from external sources is not possible.<br><br>
                                <a href='https://help.instagram.com/158826297591430' target='_blank'>https://help.instagram.com/158826297591430</a>
                            </div>
                            <hr>
                            <h4><a id="openid_question18" >Email share is not working. Why?</a></h4>
                            <div id="openid_question18_desc">
                                Email share in the plugin is enabled through <b>mailto</b>. mailto is generally configured through desktop or browser so if it is not working, mailto is not setup or improperly configured.<br><br>
                                To set it up properly, search for "mailto settings " followed by your Operating System's name where you have your browser installed.
                            </div>
                            <hr>
                            <h4><a id="openid_question19" >I cannot see some icons in preview or on blog even though I have selected them in the plugin settings.</a></h4>
                            <div id="openid_question19_desc">
                                Please check if you have an Adblock extension installed on your browser where you are checking the plugin. If you do, the Adblock extension will have a setting to block Social buttons. Uncheck this option.
                                <br/><br/>
                                If you don't have Adblock installed and still face this issue, please contact us using the Support form on the right or mail us at info@xecurify.com.
                            </div>
                        </div>
                        <hr>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        //to set heading name
        jQuery('#mo_openid_page_heading').text('Frequently Asked Questions');

        function show_faq_options(click_id){
            var span = jQuery('#' + click_id).find('span').attr('class');
            if (span.includes('dashicons-arrow-right')){
                jQuery('#openid_question_plugin').find('span').removeClass( "dashicons-arrow-right" );
                jQuery('#openid_question_plugin').find('span').addClass( "dashicons-arrow-down" );
            }
            else if(span.includes('dashicons-arrow-down')) {
                jQuery('#openid_question_plugin').find('span').removeClass( "dashicons-arrow-down" );
                jQuery('#openid_question_plugin').find('span').addClass( "dashicons-arrow-right" );
            }
        }
        function show_faq_options1(click_id){
            var span = jQuery('#' + click_id).find('span').attr('class');
            if (span.includes('dashicons-arrow-right')){
                jQuery('#openid_question_email').find('span').removeClass( "dashicons-arrow-right" );
                jQuery('#openid_question_email').find('span').addClass( "dashicons-arrow-down" );
            }
            else if(span.includes('dashicons-arrow-down')) {
                jQuery('#openid_question_email').find('span').removeClass( "dashicons-arrow-down" );
                jQuery('#openid_question_email').find('span').addClass( "dashicons-arrow-right" );
            }
        }
        function show_faq_options2(click_id){
            var span = jQuery('#' + click_id).find('span').attr('class');
            if (span.includes('dashicons-arrow-right')){
                jQuery('#openid_question_curl').find('span').removeClass( "dashicons-arrow-right" );
                jQuery('#openid_question_curl').find('span').addClass( "dashicons-arrow-down" );
            }
            else if(span.includes('dashicons-arrow-down')) {
                jQuery('#openid_question_curl').find('span').removeClass( "dashicons-arrow-down" );
                jQuery('#openid_question_curl').find('span').addClass( "dashicons-arrow-right" );
            }
        }
        function show_faq_options3(click_id){
            var span = jQuery('#' + click_id).find('span').attr('class');
            if (span.includes('dashicons-arrow-right')){
                jQuery('#openid_question_otp').find('span').removeClass( "dashicons-arrow-right" );
                jQuery('#openid_question_otp').find('span').addClass( "dashicons-arrow-down" );
            }
            else if(span.includes('dashicons-arrow-down')) {
                jQuery('#openid_question_otp').find('span').removeClass( "dashicons-arrow-down" );
                jQuery('#openid_question_otp').find('span').addClass( "dashicons-arrow-right" );
            }
        }
        function show_faq_options4(click_id){
            var span = jQuery('#' + click_id).find('span').attr('class');
            if (span.includes('dashicons-arrow-right')){
                jQuery('#openid_question_login').find('span').removeClass( "dashicons-arrow-right" );
                jQuery('#openid_question_login').find('span').addClass( "dashicons-arrow-down" );
            }
            else if(span.includes('dashicons-arrow-down')) {
                jQuery('#openid_question_login').find('span').removeClass( "dashicons-arrow-down" );
                jQuery('#openid_question_login').find('span').addClass( "dashicons-arrow-right" );
            }
        }
        function show_faq_options5(click_id){
            var span = jQuery('#' + click_id).find('span').attr('class');
            if (span.includes('dashicons-arrow-right')){
                jQuery('#openid_question_sharing').find('span').removeClass( "dashicons-arrow-right" );
                jQuery('#openid_question_sharing').find('span').addClass( "dashicons-arrow-down" );
            }
            else if(span.includes('dashicons-arrow-down')) {
                jQuery('#openid_question_sharing').find('span').removeClass( "dashicons-arrow-down" );
                jQuery('#openid_question_sharing').find('span').addClass( "dashicons-arrow-right" );
            }
        }
    </script>
    <div style="min-height:50px;"></div>
    <?php
}
