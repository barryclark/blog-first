<?php

    // create custom plugin settings menu
    add_action('admin_menu', 'blog_first_create_menu');

    function blog_first_create_menu() {
        //create new top-level menu
        add_menu_page('Blog First Settings', 'Blog First Settings', 'administrator', __FILE__, 'blog_first_settings_page');
        //call register settings function
        add_action( 'admin_init', 'register_mysettings' );
    }

    function register_mysettings() {
        //register our settings
        register_setting( 'blog_first_settings_group', 'blog_first_ga_tracking_code' );
    }

    function blog_first_settings_page() { ?>
        <div class="wrap">
            <h2>Blog First Settings</h2>
            <form method="post" action="options.php">
                <?php settings_fields('blog_first_settings_group'); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Google Tracking Code</th>
                        <td><input name="blog_first_ga_tracking_code" value="<?php echo get_option('blog_first_ga_tracking_code'); ?>" /></td>
                    </tr>
                </table>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
                </p>
            </form>
        </div>
    <?php }