<?php

/*
    ******************************************
    {{PLUGIN}} WordPress Plugin
    Author: {{PLUGIN_AUTHOR}}
    ******************************************
*/

?>
<div class="wrap {{PLUGIN_SLUG}}_admin">

    <?php

        $options = get_option({{PLUGIN_CONSTANT_BASENAME}});
    ?>

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form class="{{PLUGIN_SLUG}}_admin__form" method="post" name="{{PLUGIN_SLUG}}_options" action="options.php">
        <?php settings_fields({{PLUGIN_CONSTANT_BASENAME}}); ?>
        <hr>
        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
    </form>
</div>