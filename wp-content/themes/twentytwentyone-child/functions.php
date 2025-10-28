<?php
// Do NOT enqueue parent theme style
add_action( 'wp_enqueue_scripts', 'remove_parent_styles', 20 );
function remove_parent_styles() {
    wp_dequeue_style( 'twenty-twenty-one-style' );     
    wp_deregister_style( 'twenty-twenty-one-style' );
}

// Do NOT enqueue parent theme style
add_action( 'wp_enqueue_scripts', 'enqueue_custom_child_styles' );

require_once get_stylesheet_directory() . '/inc/shortcodes/shortcode.php';

function enqueue_custom_child_styles() {
    // Only enqueue child theme style
    // wp_enqueue_style(
    //     'twentytwentyone-child-style',
    //     get_stylesheet_directory_uri() . '/assets/css/style.css', array(),wp_get_theme()->get('Version')
    // );
    if ( is_page(9) ){
        wp_enqueue_style(
            'homepage-style',get_stylesheet_directory_uri() . '/assets/css/HomePage.css',array(),wp_get_theme()->get ('Version') 
        );
    }
    wp_enqueue_style(
        'megamenu-style',get_stylesheet_directory_uri() . '/assets/Navigation-assets/css/megamenu.css',array(),wp_get_theme()->get ('Version') 
    );
    wp_enqueue_style(
        'navigation-css-style',get_stylesheet_directory_uri() . '/assets/Navigation-assets/css/style.css',array(),wp_get_theme()->get ('Version') 
    );
    wp_enqueue_style(
        'bootstrap-icons-style',get_stylesheet_directory_uri() . '/assets/Navigation-assets/vendor/bootstrap-icons/bootstrap-icons.css',array(),wp_get_theme()->get ('Version') 
    );
    wp_enqueue_style(
        'comman-style',get_stylesheet_directory_uri() . '/assets/css/Comman.css',array(),wp_get_theme()->get ('Version') 
    );
    wp_enqueue_script(
        'child-main-js',get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'),filemtime(get_stylesheet_directory() . '/assets/js/main.js'), true 
    );

    wp_localize_script( 'child-main-js', 'themeData', array(
        'themeUrl' => get_stylesheet_directory_uri()
    ));
    if ( is_page(13) ){
        wp_enqueue_style(
            'aboutus-style',get_stylesheet_directory_uri() . '/assets/css/About-us.css',array(),wp_get_theme()->get ('Version') 
        );
    }
    if ( is_page(42023) ){
        wp_enqueue_style(
            'zoho-app-integration-style',get_stylesheet_directory_uri() . '/assets/css/zoho-app-integration.css',array(),wp_get_theme()->get ('Version') 
        );
    }
}



add_action('admin_enqueue_scripts', function ($hook) {
    wp_enqueue_media(); 
});

add_action('admin_menu', function () {
    add_menu_page(
        'Theme Settings',
        'Theme Settings',
        'manage_options',
        'theme_settings',
        'render_theme_settings_page',
        'dashicons-admin-generic',
        99
    );

    add_submenu_page('theme_settings', 'Header', 'Header', 'manage_options', 'theme_settings_header', 'render_theme_settings_page');
    add_submenu_page('theme_settings', 'Footer', 'Footer', 'manage_options', 'theme_settings_footer', 'render_theme_settings_page');
    add_submenu_page('theme_settings', 'Service', 'Service', 'manage_options', 'theme_settings_service', 'render_theme_settings_page');
    add_submenu_page('theme_settings', 'Blog', 'Blog', 'manage_options', 'theme_settings_blog', 'render_theme_settings_page');
    add_submenu_page('theme_settings', 'Portfolio', 'Portfolio', 'manage_options', 'theme_settings_portfolio', 'render_theme_settings_page');
});

function render_theme_settings_page() { ?>
    <div class="wrap">
        <h1>Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            $current_tab = $_GET['page'] ?? 'theme_settings_header';
            switch ($current_tab) {
                case 'theme_settings_footer':
                    settings_fields('footer_settings_group');
                    do_settings_sections('theme_settings_footer');
                    break;
                case 'theme_settings_service':
                    settings_fields('service_settings_group');
                    do_settings_sections('theme_settings_service');
                    break;
                case 'theme_settings_blog':
                    settings_fields('blog_settings_group');
                    do_settings_sections('theme_settings_blog');
                    break;
                case 'theme_settings_portfolio':
                    settings_fields('portfolio_settings_group');
                    do_settings_sections('theme_settings_portfolio');
                    break;
                case 'theme_settings_header':
                default:
                    settings_fields('header_settings_group');
                    do_settings_sections('theme_settings_header');
                    break;
            }
            submit_button();
            ?>
        </form>
    </div>
    <?php
}


add_action('admin_init', 'register_theme_settings_fields');

function register_theme_settings_fields() {
    // ===================== HEADER =====================
    register_setting('header_settings_group', 'header_logo');
    add_settings_section('header_section', 'Header Fields', null, 'theme_settings_header');
    add_settings_field('header_logo', 'Header Logo', 'image_upload_input_cb', 'theme_settings_header', 'header_section', ['label_for' => 'header_logo']);

    // ===================== FOOTER =====================
    register_setting('footer_settings_group', 'footer_logo');
    register_setting('footer_settings_group', 'footer_about');
    register_setting('footer_settings_group', 'contact_email');
    register_setting('footer_settings_group', 'contact_phone_india');
    register_setting('footer_settings_group', 'contact_phone_us');
    
    // Services
    register_setting('footer_settings_group', 'services_list_array');
    
    // Technologies
    register_setting('footer_settings_group', 'technologies_list_array');
    
    // About
    register_setting('footer_settings_group', 'about_links_array');
    
    // Latest Blog
    register_setting('footer_settings_group', 'blog_links_array');
    
    register_setting('footer_settings_group', 'footer_copyright');

    add_settings_section('footer_section', 'Footer Fields', null, 'theme_settings_footer');
    add_settings_field('footer_logo', 'Footer Logo', 'image_upload_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'footer_logo']);
    add_settings_field('footer_about', 'Footer About Text', 'textarea_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'footer_about']);
    add_settings_field('contact_email', 'Contact Email', 'text_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'contact_email']);
    add_settings_field('contact_phone_india', 'Phone India', 'text_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'contact_phone_india']);
    add_settings_field('contact_phone_us', 'Phone US', 'text_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'contact_phone_us']);

    // Social Icons - First register and add all social icons
    for ($i = 1; $i <= 6; $i++) {
        register_setting('footer_settings_group', "social_icon_$i");
        register_setting('footer_settings_group', "social_link_$i");

        add_settings_field("social_icon_$i", "Social Icon $i", 'image_upload_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => "social_icon_$i"]);
        add_settings_field("social_link_$i", "Social Link $i", 'text_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => "social_link_$i"]);
    }

    // Now add repeater fields AFTER social icons
    add_settings_field('services_list_array', 'Services List', 'repeater_field_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'services_list_array']);
    add_settings_field('technologies_list_array', 'Technologies List', 'repeater_field_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'technologies_list_array']);
    add_settings_field('about_links_array', 'About Links', 'repeater_field_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'about_links_array']);
    add_settings_field('blog_links_array', 'Blog Titles', 'repeater_field_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'blog_links_array']);
    
    // Copyright field at the end
    add_settings_field('footer_copyright', 'Copyright Text', 'text_input_cb', 'theme_settings_footer', 'footer_section', ['label_for' => 'footer_copyright']);
}

function text_input_cb($args) {
    $value = esc_attr(get_option($args['label_for']));
    echo "<input type='text' id='{$args['label_for']}' name='{$args['label_for']}' value='$value' class='regular-text'>";
}

function textarea_input_cb($args) {
    $value = esc_textarea(get_option($args['label_for']));
    echo "<textarea id='{$args['label_for']}' name='{$args['label_for']}' rows='5' class='large-text'>$value</textarea>";
}

function image_upload_input_cb($args) {
    $option = $args['label_for'];
    $image_url = esc_url(get_option($option));
    ?>
    <div>
        <img id="<?php echo $option; ?>_preview" src="<?php echo $image_url; ?>" style="max-width: 150px; <?php echo $image_url ? 'display:block;' : 'display:none;'; ?>" />
        <input type="hidden" id="<?php echo $option; ?>" name="<?php echo $option; ?>" value="<?php echo $image_url; ?>" />
        <br>
        <button type="button" class="button" onclick="openMediaUploader_<?php echo $option; ?>()">Upload</button>
        <button type="button" class="button" onclick="removeImage_<?php echo $option; ?>()">Remove</button>
    </div>
    <script>
        function openMediaUploader_<?php echo $option; ?>() {
            var uploader = wp.media({
                title: 'Choose Image',
                button: { text: 'Use this image' },
                multiple: false
            }).on('select', function () {
                var attachment = uploader.state().get('selection').first().toJSON();
                document.getElementById('<?php echo $option; ?>').value = attachment.url;
                document.getElementById('<?php echo $option; ?>_preview').src = attachment.url;
                document.getElementById('<?php echo $option; ?>_preview').style.display = 'block';
            }).open();
        }

        function removeImage_<?php echo $option; ?>() {
            document.getElementById('<?php echo $option; ?>').value = '';
            document.getElementById('<?php echo $option; ?>_preview').style.display = 'none';
        }
    </script>
    <?php
}


function repeater_field_cb($args) {
    $field_name = $args['label_for'];
    $values = get_option($field_name, []);

    if (!is_array($values)) $values = [];

    echo "<div id='{$field_name}_wrapper' class='repeater-wrapper'>";
    foreach ($values as $index => $value) {
        $title = isset($value['title']) ? esc_attr($value['title']) : '';
        $link = isset($value['link']) ? esc_attr($value['link']) : '';
        
        echo "<div class='repeater-item'>
                <div class='repeater-item-header'>
                    <span class='repeater-item-title'>Item " . ($index + 1) . "</span>
                    <button type='button' class='button button-secondary remove-item'>
                        <span class='dashicons dashicons-trash' style='font-size: 14px; line-height: 2;'></span>
                        Remove
                    </button>
                </div>
                <div class='repeater-item-content'>
                    <div class='field-row'>
                        <div class='field-col'>
                            <input type='text' name='{$field_name}[{$index}][title]' value='{$title}' class='regular-text' placeholder='Enter title' />
                        </div>
                        <div class='field-col'>";
                                ob_start();
                                wp_dropdown_pages([
                                    'name'              => "{$field_name}[{$index}][link]",
                                    'selected'          => $link,
                                    'show_option_none'  => 'Select a Page',
                                    'option_none_value' => '',
                                    'class'             => 'regular-text',
                                ]);
                                echo ob_get_clean();

                    echo "</div>
                    </div>
                </div>
              </div>";
    }
    echo "</div>";
    echo "<button type='button' class='button button-primary add-item' data-target='{$field_name}_wrapper'>
            <span class='dashicons dashicons-plus-alt' style='font-size: 14px; line-height: 2; margin-right: 5px;'></span>
            Add New Item
          </button>";
    
    // Add CSS styles
    echo "<style>
        .repeater-wrapper {
            margin-top: 10px;
        }
        .repeater-item {
            background: #fff;
            border: 1px solid #c3c4c7;
            border-radius: 4px;
            margin-bottom: 15px;
            box-shadow: 0 1px 1px rgba(0,0,0,0.04);
        }
        .repeater-item-header {
            background: #f6f7f7;
            border-bottom: 1px solid #c3c4c7;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .repeater-item-title {
            font-weight: 600;
            color: #1d2327;
            font-size: 14px;
        }
        .repeater-item-content {
            padding: 16px;
        }
        .field-row {
            display: flex;
            gap: 20px;
        }
        .field-col {
            flex: 1;
        }
        .field-label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #1d2327;
            font-size: 14px;
        }
        .remove-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #b32d2e;
            border-color: #b32d2e;
        }
        .remove-item:hover {
            background: #b32d2e;
            color: #fff;
        }
        .add-item {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        @media (max-width: 782px) {
            .field-row {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>";
}




add_action('admin_footer', function () {
    ?>
    <script>
        jQuery(document).ready(function ($) {
            $('.add-item').on('click', function () {
                var target = $(this).data('target');
                var fieldName = target.replace('_wrapper', '');
                var wrapper = $('#' + target);
                var itemCount = wrapper.find('.repeater-item').length;
                
                var newField = `
                    <div class="repeater-item">
                        <div class="repeater-item-header">
                            <span class="repeater-item-title">Item ${itemCount + 1}</span>
                            <button type="button" class="button button-secondary remove-item">
                                <span class="dashicons dashicons-trash" style="font-size: 14px; line-height: 2;"></span>
                                Remove
                            </button>
                        </div>
                        <div class="repeater-item-content">
                            <div class="field-row">
                                <div class="field-col">
                                    <input type="text" name="${fieldName}[${itemCount}][title]" class="regular-text" placeholder="Enter title" />
                                </div>
                                <div class="field-col">
                                    <input type="text" name="${fieldName}[${itemCount}][link]" class="regular-text" placeholder="Enter link URL" />
                                </div>
                            </div>
                        </div>
                    </div>`;
                wrapper.append(newField);
                
                // Update item numbers
                updateItemNumbers(wrapper);
            });

            $(document).on('click', '.remove-item', function () {
                var wrapper = $(this).closest('.repeater-wrapper');
                $(this).closest('.repeater-item').fadeOut(300, function() {
                    $(this).remove();
                    updateItemNumbers(wrapper);
                });
            });
            
            function updateItemNumbers(wrapper) {
                wrapper.find('.repeater-item').each(function(index) {
                    $(this).find('.repeater-item-title').text('Item ' + (index + 1));
                });
            }
        });
    </script>
    <?php
});


function register_news_and_events_post_type() {
    $labels = array(
        'name'                  => _x( 'News and Events', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'News/Event', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'News & Events', 'textdomain' ),
        'name_admin_bar'        => __( 'News/Event', 'textdomain' ),
        'archives'              => __( 'News & Events Archives', 'textdomain' ),
        'attributes'            => __( 'News/Event Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent News/Event:', 'textdomain' ),
        'all_items'             => __( 'All News & Events', 'textdomain' ),
        'add_new_item'          => __( 'Add New News/Event', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New News/Event', 'textdomain' ),
        'edit_item'             => __( 'Edit News/Event', 'textdomain' ),
        'update_item'           => __( 'Update News/Event', 'textdomain' ),
        'view_item'             => __( 'View News/Event', 'textdomain' ),
        'view_items'            => __( 'View News & Events', 'textdomain' ),
        'search_items'          => __( 'Search News & Events', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into News/Event', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this News/Event', 'textdomain' ),
        'items_list'            => __( 'News & Events list', 'textdomain' ),
        'items_list_navigation' => __( 'News & Events list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter News & Events list', 'textdomain' ),
    );

    $args = array(
        'label'                 => __( 'News/Event', 'textdomain' ),
        'description'           => __( 'Custom Post Type for News and Events', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-megaphone',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'newsnevents' ),
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true, // Enables Gutenberg and REST API
        'capability_type'       => 'post',
    );

    register_post_type( 'newsnevents', $args );
}
add_action( 'init', 'register_news_and_events_post_type', 0 );




// Register Custom Post Type: Testimonials
function create_testimonials_cpt() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Testimonials', 'textdomain' ),
        'name_admin_bar'        => __( 'Testimonial', 'textdomain' ),
        'add_new_item'          => __( 'Add New Testimonial', 'textdomain' ),
        'edit_item'             => __( 'Edit Testimonial', 'textdomain' ),
        'new_item'              => __( 'New Testimonial', 'textdomain' ),
        'view_item'             => __( 'View Testimonial', 'textdomain' ),
        'all_items'             => __( 'All Testimonials', 'textdomain' ),
        'search_items'          => __( 'Search Testimonials', 'textdomain' ),
    );

    $args = array(
        'label'                 => __( 'Testimonial', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail'),
        'public'                => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'testimonials' ),
        'show_in_rest'          => true, // Enables Gutenberg/Block Editor
    );
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'create_testimonials_cpt' );

// Filter For Pages
// Add Parent Page filter dropdown in Pages admin
add_action('restrict_manage_posts', function($post_type) {
    if ($post_type !== 'page') return;

    $parent_id = isset($_GET['parent_page_filter']) ? intval($_GET['parent_page_filter']) : '';

    wp_dropdown_pages([
        'post_type'        => 'page',
        'name'             => 'parent_page_filter',
        'show_option_none' => 'All Parents',
        'option_none_value'=> '',
        'selected'         => $parent_id,
    ]);
});

// Apply filter to query
add_filter('parse_query', function($query) {
    global $pagenow;

    if ($pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'page' && !empty($_GET['parent_page_filter'])) {
        $query->query_vars['post_parent'] = intval($_GET['parent_page_filter']);
    }
});


function register_avada_portfolio_post_type() {
    // Register Custom Post Type: avada_portfolio
    $labels = array(
        'name'                  => _x('Portfolios', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Portfolio', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Portfolio', 'textdomain'),
        'name_admin_bar'        => __('Portfolio', 'textdomain'),
        'add_new_item'          => __('Add New Post', 'textdomain'),
        'edit_item'             => __('Edit Portfolio', 'textdomain'),
        'new_item'              => __('New Portfolio', 'textdomain'),
        'view_item'             => __('View Portfolio', 'textdomain'),
        'search_items'          => __('Search Portfolio', 'textdomain'),
    );

    $args = array(
        'label'                 => __('Portfolio', 'textdomain'),
        'description'           => __('Avada portfolio items', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array(), // taxonomies added separately
        'public'                => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio', // Optional
        'show_in_rest'          => true, // Enable Gutenberg
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'portfolio-item'),
    );

    register_post_type('avada_portfolio', $args);

    // Register Taxonomy: portfolio_category
    register_taxonomy('portfolio_category', 'avada_portfolio', array(
        'labels' => array(
            'name'              => _x('Portfolio Categories', 'taxonomy general name', 'textdomain'),
            'singular_name'     => _x('Portfolio Category', 'taxonomy singular name', 'textdomain'),
            'search_items'      => __('Search Categories', 'textdomain'),
            'all_items'         => __('All Categories', 'textdomain'),
            'edit_item'         => __('Edit Category', 'textdomain'),
            'update_item'       => __('Update Category', 'textdomain'),
            'add_new_item'      => __('Add New Category', 'textdomain'),
            'new_item_name'     => __('New Category Name', 'textdomain'),
            'menu_name'         => __('Portfolio Categories', 'textdomain'),
        ),
        'hierarchical' => true,
        'public' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'portfolio-category'),
    ));

    // Register Taxonomy: portfolio_skills
    register_taxonomy('portfolio_skills', 'avada_portfolio', array(
        'labels' => array(
            'name'              => _x('Portfolio Skills', 'taxonomy general name', 'textdomain'),
            'singular_name'     => _x('Portfolio Skill', 'taxonomy singular name', 'textdomain'),
            'search_items'      => __('Search Skills', 'textdomain'),
            'all_items'         => __('All Skills', 'textdomain'),
            'edit_item'         => __('Edit Skill', 'textdomain'),
            'update_item'       => __('Update Skill', 'textdomain'),
            'add_new_item'      => __('Add New Skill', 'textdomain'),
            'new_item_name'     => __('New Skill Name', 'textdomain'),
            'menu_name'         => __('Portfolio Skills', 'textdomain'),
        ),
        'hierarchical' => false,
        'public' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'portfolio-skills'),
    ));

    // Register Taxonomy: portfolio_tags
    register_taxonomy('portfolio_tags', 'avada_portfolio', array(
        'labels' => array(
            'name'              => _x('Portfolio Tags', 'taxonomy general name', 'textdomain'),
            'singular_name'     => _x('Portfolio Tag', 'taxonomy singular name', 'textdomain'),
            'search_items'      => __('Search Tags', 'textdomain'),
            'all_items'         => __('All Tags', 'textdomain'),
            'edit_item'         => __('Edit Tag', 'textdomain'),
            'update_item'       => __('Update Tag', 'textdomain'),
            'add_new_item'      => __('Add New Tag', 'textdomain'),
            'new_item_name'     => __('New Tag Name', 'textdomain'),
            'menu_name'         => __('Portfolio Tags', 'textdomain'),
        ),
        'hierarchical' => false,
        'public' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'portfolio-tags'),
    ));
}
add_action('init', 'register_avada_portfolio_post_type');


// Register multiple menu locations
function register_sidebar_menus() {
    register_nav_menus(array(
        'menu-left'       => __('Sidebar Left Menu', 'yourtheme'),
        'menu-services'   => __('Services Menu', 'yourtheme'),
        'menu-tech'       => __('Technologies Menu', 'yourtheme'),
        'menu-industries' => __('Industries Menu', 'yourtheme'),
        'menu-about'      => __('About Menu', 'yourtheme'),
        'menu-career'     => __('Career Menu', 'yourtheme'),
    ));
}
add_action('init', 'register_sidebar_menus');


add_filter('walker_nav_menu_start_el', function($item_output, $item, $depth, $args) {

    $slug = sanitize_title($item->title);

    $item_output = preg_replace(
        '/<a /',
        '<a data-target="' . esc_attr($slug) . '" ',
        $item_output,
        1
    );

    $item_output = str_replace('</a>', ' <i class="bi bi-arrow-right"></i></a>', $item_output);

    return $item_output;
}, 10, 4);



/*
add_action('wp_nav_menu_item_custom_fields', function($item_id, $item) {
    $image_id  = get_post_meta($item_id, '_menu_item_image', true);
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
    ?>
    <p class="field-image description description-wide">
        <label for="edit-menu-item-image-<?php echo $item_id; ?>">
            <?php _e('Menu Item Image'); ?><br>
            <input type="hidden" class="menu-item-image-id" name="menu-item-image[<?php echo $item_id; ?>]" value="<?php echo esc_attr($image_id); ?>">
            <img class="menu-item-image-preview" src="<?php echo esc_url($image_url); ?>" style="max-width:80px; display:<?php echo $image_url ? 'block':'none'; ?>; margin-top:5px;">
            <button type="button" class="button upload-menu-item-image">Upload Image</button>
            <button type="button" class="button remove-menu-item-image" style="display:<?php echo $image_url ? 'inline-block':'none'; ?>">Remove</button>
        </label>
    </p>
    <?php
}, 10, 2);
*/

add_action('wp_update_nav_menu_item', function($menu_id, $menu_item_db_id) {
    if (isset($_POST['menu-item-image'][$menu_item_db_id])) {
        $image_id = (int) $_POST['menu-item-image'][$menu_item_db_id];
        if ($image_id) {
            update_post_meta($menu_item_db_id, '_menu_item_image', $image_id);
        } else {
            delete_post_meta($menu_item_db_id, '_menu_item_image');
        }
    }
}, 10, 2);

add_action('admin_enqueue_scripts', function($hook) {
    if ($hook !== 'nav-menus.php') return;
    wp_enqueue_media();
    wp_register_script('menu-item-image-js', '', [], false, true);
    wp_enqueue_script('menu-item-image-js');

    wp_add_inline_script('menu-item-image-js', "
        jQuery(document).ready(function($){
            $(document).on('click', '.upload-menu-item-image', function(e){
                e.preventDefault();
                var button = $(this);
                var container = button.closest('label');
                var input     = container.find('.menu-item-image-id');
                var preview   = container.find('.menu-item-image-preview');
                var removeBtn = container.find('.remove-menu-item-image');

                var frame = wp.media({
                    title: 'Select or Upload Image',
                    button: { text: 'Use this image' },
                    multiple: false
                });

                frame.on('select', function(){
                    var attachment = frame.state().get('selection').first().toJSON();
                    input.val(attachment.id);
                    preview.attr('src', attachment.url).show();
                    removeBtn.show();
                });

                frame.open();
            });

            $(document).on('click', '.remove-menu-item-image', function(e){
                e.preventDefault();
                var button = $(this);
                var container = button.closest('label');
                container.find('.menu-item-image-id').val('');
                container.find('.menu-item-image-preview').hide();
                button.hide();
            });
        });
    ");
});




add_filter('walker_nav_menu_start_el', function ($item_output, $item, $depth, $args) {
    $image_id  = get_post_meta($item->ID, '_menu_item_image', true);
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';

    $data_preview = !empty($item->attr_title) ? $item->attr_title : sanitize_title($item->title);

    if ($image_url) {
        $item_output = '<a href="' . esc_url($item->url) . '" data-preview="' . esc_attr($data_preview) . '">
            <img src="' . esc_url($image_url) . '" alt="' . esc_attr($item->title) . '"/> 
            ' . esc_html($item->title) . '
        </a>';
    }

    return $item_output;
}, 10, 4);


// Function to clean only Fusion Builder shortcodes
function ccp_clean_fusion_content( $content ) {
    // Remove Fusion Builder shortcodes with closing tags: [fusion_xxx]...[/fusion_xxx]
    $content = preg_replace( '/\[fusion[^\]]*\](.*?)\[\/fusion[^\]]*\]/is', '$1', $content );

    // Remove self-closing Fusion Builder shortcodes: [fusion_xxx attr="..."]
    $content = preg_replace( '/\[fusion[^\]]*\]/i', '', $content );

    return $content;
}

// Hook into save post
function ccp_clean_post_on_save( $post_id ) {
    // Avoid infinite loops
    remove_action( 'save_post', 'ccp_clean_post_on_save' );

    $post = get_post( $post_id );
    if ( $post && ! wp_is_post_revision( $post_id ) ) {
        $clean_content = ccp_clean_fusion_content( $post->post_content );
        wp_update_post( array(
            'ID'           => $post_id,
            'post_content' => $clean_content
        ) );
    }

    add_action( 'save_post', 'ccp_clean_post_on_save' );
}
add_action( 'save_post', 'ccp_clean_post_on_save' );


function get_custom_menu_data() {
    $locations = get_nav_menu_locations();

    if (!isset($locations['primary'])) return [];

    $menu_id = $locations['primary'];
    $menu = wp_get_nav_menu_items($menu_id);
    $menuData = [];

    if (!$menu) return $menuData;

    foreach ($menu as $item) {
        $parent_id = $item->menu_item_parent;
        $slug = sanitize_title($item->title);

        if ($parent_id == 0) {
            $image_id  = get_post_meta($item->id, '_menu_item_image', true);
            $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
            $menuData[$slug]['main'] = [
                'title'     => $item->title,
                'desc'      => get_field('menu_description', $item) ?? '',
                'img'       => get_field('menu_image', $item)['url'] ?? get_site_url().'/wp-content/uploads/2025/09/UI-UX-Services-scaled.jpg', 
                'menu_icon' => get_field('menu_icon_img', $item)['url'], 
                'url'       => $item->url,
            ];
        } else {
            $child = [
                'title'     => $item->title,
                'desc'      => get_field('menu_description', $item) ?? '',
                'img'       => get_field('menu_image', $item)['url'] ?? get_site_url().'/wp-content/uploads/2025/09/UI-UX-Services-scaled.jpg',
                'menu_icon' => get_field('menu_icon_img', $item)['url'] ?? get_site_url().'/wp-content/uploads/2025/09/Custom-software-development.png',
                'url'       => $item->url,
            ];

            foreach ($menu as $parentItem) {
                if ($parentItem->ID == $parent_id) {
                    $parent_slug = sanitize_title($parentItem->title);
                    $menuData[$parent_slug]['childs'][] = $child;
                    break;
                }
            }
        }
    }

    return $menuData;
}


