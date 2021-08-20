<h1>Humorous Theme Options</h1>
<?php settings_errors(); ?>
<br>

<form action="options.php" method="post">
    <?php
        settings_fields('humorous-setting-group');
        do_settings_sections('humorous_theme_options');
        submit_button();
    ?>
</form>