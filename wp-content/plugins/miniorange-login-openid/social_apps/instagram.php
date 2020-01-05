<?php


class instagram
{
    public $color="#517FA6";
    public $scope="basic+public_content+follower_list";
    public $instructions;
    public function __construct() {
        $this->site_url = get_option( 'siteurl' );
        $this->instructions="Go to <a href=\"http://instagram.com/developer\" target=\"_blank\">http://instagram.com/developer</a> and sign in with your instagram account.##Go to Manage Clients and click on <strong>Register A New Client</strong>##Enter Application Name, Description, Company Name, Privacy Policy URL, Contact Email.##Enter the <b><code id='9'>" . get_option('siteurl') . "</code><i style= \"width: 11px;height: 9px;padding-left:2px;padding-top:3px\" class=\"mofa mofa-fw mofa-lg mofa-copy mo_copy copytooltip\" onclick=\"copyToClipboard(this, '#9', '#shortcode_url_copy')\"><span id=\"shortcode_url_copy\" class=\"copytooltiptext\">Copy to Clipboard</span></i></b> As <strong>Website URL.</strong> And <b><code id='10'>".mo_get_permalink('instagram')."</code><i style= \"width: 11px;height: 9px;padding-left:2px;padding-top:3px\" class=\"mofa mofa-fw mofa-lg mofa-copy mo_copy copytooltip\" onclick=\"copyToClipboard(this, '#10', '#shortcode_url1_copy')\"><span id=\"shortcode_url1_copy\" class=\"copytooltiptext\">Copy to Clipboard</span></i></b> as <strong>Valid redirect URI.</strong>##Click on <strong>Register</strong>.##Once your app is registered, you will be navigated to the <strong>Manage Clients</strong> page. Click on the <strong>Manage</strong> button for your new client.##This will bring you to the page that contains your <strong>Client ID</strong> and <strong>Client Secret</strong>. Copy these and Paste them into the fields above. ##Go to <b>Permissions</b> tab and click on <b>Start a Submission</b> ##Click on the Save settings button.##Go to Social Login tab to configure the display as well as other login settings";
    }

    function mo_openid_get_app_code()
    {
        $appslist = maybe_unserialize(get_option('mo_openid_apps_list'));
        $social_app_redirect_uri= get_social_app_redirect_uri('instagram');
        mo_openid_start_session();
        $_SESSION["appname"] = 'instagram';
        $client_id = $appslist['instagram']['clientid'];
        $login_dialog_url = 'https://api.instagram.com/oauth/authorize/?client_id=' . $client_id . '&redirect_uri=' . $social_app_redirect_uri . '&response_type=code';
        header('Location:'. $login_dialog_url);
        exit;
    }

    function mo_openid_get_access_token()
    {
        $code = mo_openid_validate_code();
        $social_app_redirect_uri = get_social_app_redirect_uri('instagram');

        $appslist = maybe_unserialize(get_option('mo_openid_apps_list'));
        $client_id = $appslist['instagram']['clientid'];
        $client_secret = $appslist['instagram']['clientsecret'];
        $access_token_uri = 'https://api.instagram.com/oauth/access_token';
        $postData = 'grant_type=authorization_code&client_id='. $client_id .'&client_secret=' . $client_secret . '&code=' . $code . '&redirect_uri=' . $social_app_redirect_uri;

        $access_token_json_output = mo_openid_get_access_token($postData, $access_token_uri,'instagram');
        mo_openid_start_session();

        //Test Configuration
        if (is_user_logged_in() && get_option('mo_openid_test_configuration') == 1) {
            mo_openid_app_test_config($access_token_json_output);
        }
        //set all profile details
        //Set User current app
        $first_name = $last_name = $email = $user_name = $user_url = $user_picture = $social_user_id = '';
        $location_city = $location_country = $about_me = $company_name = $age = $gender = $friend_nos = '';

        if(isset($access_token_json_output['user']['full_name'])){
            $full_name = explode(" ", $access_token_json_output['user']['full_name']);
            $first_name = isset( $full_name[0]) ?  $full_name[0] : '';
            $last_name = isset( $full_name[1]) ?  $full_name[1] : '';
        }
        $user_name = isset( $access_token_json_output['user']['username']) ?  $access_token_json_output['user']['username'] : '';
        $user_picture = isset( $access_token_json_output['user']['profile_picture']) ?  $access_token_json_output['user']['profile_picture'] : '';
        $social_user_id = isset( $access_token_json_output['user']['id']) ?  $access_token_json_output['user']['id'] : '';
        $about_me = isset( $access_token_json_output['user']['bio']) ?  $access_token_json_output['user']['bio'] : '';
        $website= isset( $access_token_json_output['user']['website']) ?  $access_token_json_output['user']['website'] : '';

        $appuserdetails = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'user_name' => $user_name,
            'user_url' => $user_url,
            'user_picture' => $user_picture,
            'social_user_id' => $social_user_id,
            'location_city' => $location_city,
            'location_country' => $location_country,
            'about_me' => $about_me,
            'company_name' => $company_name,
            'friend_nos' => $friend_nos,
            'gender' => $gender,
            'age' => $age,
        );
        return $appuserdetails;
    }
}