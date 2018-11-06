<?php

        if( function_exists('acf_add_options_page') ) {
            
           acf_add_options_page(array(
                'page_title' 	=> 'Isabella',
                'menu_title'	=> 'Isabella',
                'menu_slug' 	=> 'isabella-settings',
                'capability'	=> 'edit_posts'
            ));
                    
        }

?>