<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'init', 'register_post_types' );
add_action( 'init', 'create_taxonomy' );

function register_post_types(){
	register_post_type( 'catalog_card', [
		'label'  => null,
		'labels' => [
			'name'               => 'Карточка каталога', // основное название для типа записи
			'singular_name'      => 'Карточка каталога', // название для одной записи этого типа
			'add_new'            => 'Добавить карточку каталога', // для добавления новой записи
			'add_new_item'       => 'Добавление карточки каталога', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование карточки каталога', // для редактирования типа записи
			'new_item'           => 'Новая карточка каталога', // текст новой записи
			'view_item'          => 'Смотреть карточку каталога', // для просмотра записи этого типа.
			'search_items'       => 'Искать карточку каталога', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Каталог', // название меню
		],
		'description'         => 'Это карточки каталога товаров',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // ВАЖНО УСТАНОВИТЬ FALSE, ЧТОБЫ ВЫВОДИЛОСЬ В ЦИКЛЕ ТАКСОНОМИИ
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt2',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['sections'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'work_photo', [
		'label'  => null,
		'labels' => [
			'name'               => 'Фотография работы', // основное название для типа записи
			'singular_name'      => 'Фотография работы', // название для одной записи этого типа
			'add_new'            => 'Добавить фотографию работы', // для добавления новой записи
			'add_new_item'       => 'Добавление фотографии работы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактированиефотографии работы', // для редактирования типа записи
			'new_item'           => 'Новая фотография работы', // текст новой записи
			'view_item'          => 'Смотреть фотографию работы', // для просмотра записи этого типа.
			'search_items'       => 'Искать фотографии работы', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Наши работы', // название меню
		],
		'description'         => 'Это фотографии выполненных работ',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // ВАЖНО УСТАНОВИТЬ FALSE, ЧТОБЫ ВЫВОДИЛОСЬ В ЦИКЛЕ ТАКСОНОМИИ
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-image',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	

}


function create_taxonomy(){
	register_taxonomy( 'sections', [ 'catalog_card' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Категории',
			'singular_name'     => 'Категорию',
			'search_items'      => 'Найти категорию',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Изменить категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новое имя категории',
			'menu_name'         => 'Категории',
		],
		'description'           => 'категории карточек каталога', // описание таксономии
		'public'                => true,
			'show_in_quick_edit'=> true, // равен аргументу show_ui
			'show_admin_column' => true,
		'hierarchical'          => false,

		'rewrite'               => true,
		'show_in_rest'          => true,   	// Это важно добавить, иначе не отобразится в панеле управления!!
	
	] );


		
}





function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Меню в шапке большие экраны' );
	register_nav_menu( 'top-mobile', 'Меню в шапке для телефонов' );
}

function style_theme(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );

}

function scripts_theme(){
	
	// подключение JQuery с Google CDN

	// дерегистрация входящей в состав WP
    wp_deregister_script('jquery');
  // регистрируем новую версию
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
  // подключаем
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('scripts.min', get_template_directory_uri() . '/assets/js/scripts.min.js', ['jquery'] );
	
}
