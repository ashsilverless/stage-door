<?php /*
Plugin Name: Stage Door
Plugin URI:  https://silverless.co.uk
Description: Displaying the Silverless-branded log in screen.
Version:     1.0
Author:      Silverless
*/
function custom_login_logo() {?>
<style type="text/css">
 body.login {background:#201a23;}
body.login h1 a {
    background-image: url(<?php $plugin_dir_path = dirname(__FILE__);?>/wp-content/plugins/stage-door/logo.png);
    background-size: contain;
    height: 60px;
    width: 100%;
}

body.login form {
    background: #cdc7c0;
    border: none;
    box-shadow: none;
}

body.login form .input,
body.login input[type=password],
body.login input[type=text] {
    border-width: 0;
    border-radius: 0;
}

body.wp-core-ui .button {
    color: #fe4d43;
}

body.wp-core-ui .button.button-large {
    background: #1f1922;
    color: white;
    border: none;
    border-radius: 0;
    padding: 0.5em 3em;
}

body input[type=checkbox],
body input[type=radio] {
    border:none;
    box-shadow: none;
}

body.login #nav {
    margin: 2em 0;
    padding: 0;
}
body.login #nav a {
        display: inline-block;
    background: #fe4d43;
    padding: 1em 2em;
    color: white;
    }

body.login #backtoblog {
    font-size: 1em;
    padding: 0;
}

body.login #backtoblog a {
    color: white;
}

body.login .privacy-policy-page-link {
    display: none;
}

</style>
<?php }
add_action( 'login_head', 'custom_login_logo' );
?>
