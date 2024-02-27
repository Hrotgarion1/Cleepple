<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => '',
    'title_prefix' => 'Cleepple.com | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Cleepple.</b>Com',
    'logo_img' => 'vendor/adminlte/dist/img/iconocleepplegrande.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'cleepple',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-gray',
    'usermenu_image' => false,
    'usermenu_desc' => true,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-gray',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-white',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-gray elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-home',
    'right_sidebar_theme' => 'light',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [
        [
            'text' => 'search',
            'search' => false,
            'topnav' => false,
        ],
        /* Tambien se puede pasar como valor en lugar de "url" la "route" y pasar el nombre de la route*/
        [
            'text' => ['profile_trans_key'],
            'bg'  => 'gray',
            'icon'    => 'far fa-user',
            'icon_color' => 'gray',
            'route'  =>  'profile.show',
            'topnav_user' => true,
        ],
        [
            'text' => ['leave_tools'],
            'bg'  => 'gray',
            'icon'    => 'fas fa-undo-alt',
            'icon_color' => 'gray',
            'url'  =>  'dashboard',
            'topnav_user' => true,
        ],
        
        /* la directiva "can" sirve para gestionar el sistema de roles, ver el video como administrar plantilla AdminLTE parte 2 de coders free a partir del minuto 9:30*/
        ['header' => ['USUARIOS']],
        [
            'text' => 'Dashboard',
            'route'  => 'admin.home',
            'icon'  => 'fas fa-fw fa-tachometer-alt',
            'icon_color' => 'black',
            'can' => 'Ver dashboard'
        ],
        /* Este es creado por mi y sirve de muestra de posibilidades*/
        [
            'text' => 'Roles',
            'route'  => 'admin.roles.index',
            'icon'  => 'fas fa-fw fa-users-cog',
            'icon_color' => 'black',
            'active' => ['admin/roles*'],
            'can' => 'Listar rol'
            /* 'label' => 'nuevo',
            'label_color' => 'danger',*/

        ],
        [
            'text' => 'Usuarios',
            'route'  => 'admin.users.index',
            'icon'  => 'fas fa-fw fa-users',
            'icon_color' => 'black',
            'active' => ['admin/users*'],
            'can' => 'Leer usuarios'
            /* 'label' => 'nuevo',
            'label_color' => 'danger',*/

        ],
        ['header' => 'BLOG'],
        [
            'text'    => 'Opciones del Blog',
            'icon'    => 'fas fa-code-branch',
            'icon_color' => 'gray',
            'can' => '',
            'submenu' => [
                [
                    'text' => ['Categorías'],
                    'route'  => 'admin.categories.index',
                    'icon'  => 'fab fa-fw fa-buffer',
                    'icon_color' => 'black',
                    'active' => ['admin/categoryblog*'],
                    
                ],
                [
                    'text' => ['Profesiones'],
                    'route'  => 'admin.profesiones.index',
                    'icon'  => 'far fa-fw fa-bookmark',
                    'icon_color' => 'black',
                    'active' => ['admin/profesion*'],
                    
                ],
                [
                    'text' => ['Especializaciones'],
                    'route'  => 'admin.especializaciones.index',
                    'icon'  => 'far fa-fw fa-bookmark',
                    'icon_color' => 'black',
                    'active' => ['admin/especializacion*'],
                    
                ],
                [
                    'text' => ['Lista de Post'],
                    'route'  => 'admin.postsblog.index',
                    'icon'  => 'far fa-fw fa-clipboard',
                    'icon_color' => 'black',
                    'active' => ['admin/postblog*'],
                    
                ],
                [
                    'text' => ['Crear un Post'],
                    'route'  => 'admin.postsblog.create',
                    'icon'  => 'far fa-calendar-plus',
                    'icon_color' => 'black',
                    'active' => ['admin/postblog*'],
                    
                ],
                [
                    'text' => ['Tipos de Post'],
                    'route'  => 'admin.typeposts.index',
                    'icon'  => 'fas fa-file-archive',
                    'icon_color' => 'black',
                    'active' => ['admin/typepost*'],
                    
                ],
            ],
        ],
        
        ['header' => 'CURSOS'],
        [
            'text'    => 'Opciones de los cursos',
            'icon'    => 'fas fa-code-branch',
            'icon_color' => 'gray',
            'can' => '',
            'submenu' => [
                [
                    'text' => ['Categorías del Curso'],
                    'route'  => 'admin.categorycourses.index',
                    'icon'  => 'fas fa-fw fa-cogs',
                    'icon_color' => 'black',
                    'active' => ['admin/categorycourse*'],
                    
                ],
                [
                    'text' => ['Niveles del Curso'],
                    'route'  => 'admin.levelcourses.index',
                    'icon'  => 'fas fa-chart-line',
                    'icon_color' => 'black',
                    'active' => ['admin/levelcourse*'],
                    
                ],
                [
                    'text' => ['Precios de los Cursos'],
                    'route'  => 'admin.pricecourses.index',
                    'icon'  => 'fas fa-euro-sign',
                    'icon_color' => 'black',
                    'active' => ['admin/pricecourse*'],
                    
                ],
            ],
        ],
        ['header' => 'RANKINGS EPS'],
        [
            'text'    => 'Rankings',
            'icon'    => 'fas fa-code-branch',
            'icon_color' => 'gray',
            'can' => '',
            'submenu' => [
                [
                    'text' => ['local'],
                    'icon'    => 'fas fa-file-import',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['provincial'],
                    'icon'    => 'fas fa-file-import',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['estatal'],
                    'icon'    => 'fas fa-file-import',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['internacional'],
                    'icon'    => 'fas fa-file-import',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => ['CHAT']],
        [
            'text'    => 'Chats',
            'icon'    => 'fas fa-briefcase',
            'icon_color' => 'gray',
            'submenu' => [
                [
                    'text' => ['provincial'],
                    'icon'    => 'fas fa-list-ol',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['estatal'],
                    'icon'    => 'fas fa-list-ol',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['internacional'],
                    'icon'    => 'fas fa-list-ol',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ], 
            ],
        ],
        ['header' => ['buzon_correo']],
        [
            'text'    => ['buzon'],
            'icon'    => 'fas fa-mail-bulk',
            'icon_color' => 'gray',
            'submenu' => [
                [
                    'text' => ['ofer_empl'],
                    'icon'    => 'fas fa-envelope',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['ofer_servi'],
                    'icon'    => 'fas fa-envelope',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['ofer_proy'],
                    'icon'    => 'fas fa-envelope',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['servi_activ'],
                    'icon'    => 'fas fa-envelope',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
                [
                    'text' => ['histo_servi'],
                    'icon'    => 'fas fa-envelope',
                    'icon_color' => 'gray',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => ['estud']],
        [
            'text'    => ['mi_centr_estud'],
            'icon'    => 'fas fa-search-plus',
            'icon_color' => 'gray',
            'can' => '',

            'submenu' => [
                [
                    'text' => ['comp_eps_clase'],
                    'url'  => '#',
                    'icon'    => 'fas fa-people-arrows',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['soli_rc'],
                    'url'  => '#',
                    'icon'    => 'fas fa-users',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['notif_centro'],
                    'url'  => '#',
                    'icon'    => 'fas fa-map-marked-alt',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['report'],
                    'url'  => '#',
                    'icon'    => 'fas fa-map-marked-alt',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['foro_clase'],
                    'url'  => '#',
                    'icon'    => 'fas fa-hand-holding-usd',
                    'icon_color' => 'gray',

                ],
            ],
        ],
        ['header' => ['empresa']],
        [
            'text'    => ['mi_empresa'],
            'icon'    => 'fas fa-search-plus',
            'icon_color' => 'gray',
            'can' => '',

            'submenu' => [
                [
                    'text' => ['comp_eps_empre'],
                    'url'  => '#',
                    'icon'    => 'fas fa-people-arrows',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['soli_rc_emp'],
                    'url'  => '#',
                    'icon'    => 'fas fa-users',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['notif_empre'],
                    'url'  => '#',
                    'icon'    => 'fas fa-map-marked-alt',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['Report'],
                    'url'  => '#',
                    'icon'    => 'fas fa-map-marked-alt',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['ofer_emple'],
                    'url'  => '#',
                    'icon'    => 'fas fa-hand-holding-usd',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['proyects'],
                    'url'  => '#',
                    'icon'    => 'fas fa-notes-medical',
                    'icon_color' => 'gray',

                ],
                [
                    'text' => ['foro'],
                    'url'  => '#',
                    'icon'    => 'fas fa-hand-holding-usd',
                    'icon_color' => 'gray',

                ],
            ],
        ],
        ['header' => ['autono_herrami']],
        [
            'text'    => ['autono'],
            'icon'    => 'fas fa-laptop-house',
            'icon_color' => 'gray',
            'submenu' => [
                
                [
                    'text' => ['busc_proyec'],
                    'url'  => '',
                    'icon'    => 'fas fa-search-dollar',
                    'icon_color' => 'gray',
                    'can' => '',

                ],
                [
                    'text' => ['list_envi'],
                    'icon'    => 'fas fa-clipboard-list',
                    'icon_color' => 'gray',
                    'url'  => '#',
                    'can' => '',
                ],
                [
                    'text' => ['Buzon'],
                    'icon'    => 'fas fa-envelope',
                    'icon_color' => 'gray',
                    'url'  => '#',
                    'can' => '',
                ],
                [
                    'text' => 'histo_acept',
                    'icon'    => 'fas fa-envelope',
                    'icon_color' => 'gray',
                    'url'  => '#',
                    'can' => '',
                ],
            ],
        ],
        
       
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/select2/js/select2.full.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2/css/select2.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/chart.js/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            /*Este true hace que este activo en todo el proyecto*/
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/sweetalert2/sweetalert2.all.min.js',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => true,
];
