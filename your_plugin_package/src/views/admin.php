<?php

/*
    ******************************************
    Your Plugin WordPress Plugin
    Author: Author | http://author.xxx | author@author.xxx
    ******************************************
*/

?>
<div class="wrap your_plugin_admin">

    <?php

        $options = get_option(YOURPLUGIN);
    ?>

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form class="your_plugin_admin__form" method="post" name="your_plugin_options" action="options.php">
        <?php settings_fields(YOURPLUGIN); ?>
        <hr>
        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
    </form>
</div>