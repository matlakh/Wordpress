<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'post_meta','Дополнительная информация о команде')
    ->where( 'post_type', '=', 'our_team')    
    ->add_fields( array(
            Field::make( 'text', 'team_twitter', 'Ссылка на твиттер работника' ),
            Field::make( 'text', 'team_facebook', 'Ссылка на фейсбук работника' ),
            Field::make( 'text', 'team_linkedin', 'Ссылка на линкедин работника' ),
        ) );

}

?>