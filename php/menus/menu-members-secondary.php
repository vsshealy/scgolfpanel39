<?php 
    /**
     * php/menus/menu-members-secondary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.02.08)
     * @copyright 2024 (2024.02.08)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-10',
            'menu_id' => 'Members-Secondary'
        )
    );
?>