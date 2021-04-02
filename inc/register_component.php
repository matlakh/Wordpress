<?php 
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'our_team', [
		'label'  => null,
		'labels' => [
			'name'               => 'Команда', // основное название для типа записи
			'singular_name'      => 'Команда', // название для одной записи этого типа
			'add_new'            => 'Добавить члена команды', // для добавления новой записи
			'add_new_item'       => 'Добавление члена команды', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование члена команды', // для редактирования типа записи
			'new_item'           => 'Новый член команды', // текст новой записи
			'view_item'          => 'Смотреть члена команды', // для просмотра записи этого типа.
			'search_items'       => 'Искать члена команды', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Команда', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'supports'            => [ 'title', 'editor', 'thumbnail'],
		'publicly_queryable'  => false,
		'rewrite'             => false,
		'query_var'           => false,
	] );
	register_post_type( 'products', [
		'label'  => null,
		'labels' => [
			'name'               => 'Ассортемент', // основное название для типа записи
			'singular_name'      => 'Ассортемент', // название для одной записи этого типа
			'add_new'            => 'Добавить ассортемент', // для добавления новой записи
			'add_new_item'       => 'Добавление ассортемента', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование ассортемента', // для редактирования типа записи
			'new_item'           => 'Новый продукт', // текст новой записи
			'view_item'          => 'Смотреть продукты', // для просмотра записи этого типа.
			'search_items'       => 'Искать продукт', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Ассортемент', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-buddicons-community',
		'supports'            => [ 'title', 'editor', 'thumbnail'],
		'publicly_queryable'  => false,
		'rewrite'             => false,
		'query_var'           => false,
	] );
}
?>