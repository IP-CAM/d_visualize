<?php
$_['d_visualize_template_default'] = array(
    'name'          => 'default skin',
    'codename'      => 'd_default',
    'description'   => 'Skin from default opencart',
    'page'          => array(
        'default'          => array(
            'layout' => array(
                'template'        => 'd_visualize/template/layout/default.twig', // here can be custom settings for this template
                'container_width' => '1440',
                'partial'         => array(
                    'breadcrumb'      => array(
                        'template'  => 'd_visualize/template/partial/d_breadcrumb.twig', // here can be custom settings for this template
                        'component' => array(
                            'breadcrumb' => array(
                                'template' => 'd_visualize/template/component/d_breadcrumb/default.twig'
                            )
                        )
                    ),
                    'd_product_sort'  => array(
                        'template'  => 'd_visualize/template/partial/d_product_sort.twig', // here can be custom settings for this template
                        'component' => array(
                            'd_product_sort' => array(
                                'template' => 'd_visualize/template/component/d_product_sort/default.twig'
                            )
                        )
                    ),
                    'd_product_thumb' => array(
                        'template'  => 'd_visualize/template/partial/d_product_thumb.twig', // here can be custom settings for this template
                        'component' => array(
                            'd_product_thumb' => array(
                                'template'  => 'd_visualize/template/component/d_product_thumb/default.twig',
                                'partials'  => array('d_rating'),//may be if we want to insert component to component we have to just declare only name and can use in component.d_rating
                                'component' => array(
                                    'd_rating' => array(
                                        'template' => 'd_visualize/template/component/d_rating/default.twig'
                                    )
                                )
                            )
                        )
                    ),
                    'd_product_list'  => array(
                        'template'  => 'd_visualize/template/partial/d_product_list.twig', // here can be custom settings for this template
                        'component' => array(
                            'd_product_list' => array(
                                'template' => 'd_visualize/template/component/d_product_list/default.twig',
                            )
                        )
                    ),
                    'd_rating'        => array(
                        'template'  => 'd_visualize/template/partial/d_rating.twig',
                        'component' => array(
                            'd_rating' => array(
                                'template' => 'd_visualize/template/component/d_rating/d_default.twig'
                            )
                        )
                    ),
                    'd_account_field' => array(
                        'template'  => 'd_visualize/template/partial/d_account_field.twig',
                        'component' => array(
                            'd_account_field' => array(
                                'template' => 'd_visualize/template/component/d_account_field/default.twig'
                            )
                        )
                    ),
                    'd_account_field_affiliate' => array(
                        'template'  => 'd_visualize/template/partial/d_account_field_affiliate.twig',
                        'component' => array(
                            'd_account_field_affiliate' => array(
                                'template' => 'd_visualize/template/component/d_account_field_affiliate/default.twig'
                            )
                        )
                    ),
                    'd_address_field' => array(
                        'template'  => 'd_visualize/template/partial/d_address_field.twig',
                        'component' => array(
                            'd_address_field' => array(
                                'template' => 'd_visualize/template/component/d_address_field/default.twig'
                            )
                        )
                    ),
                    'd_name_field'    => array(
                        'template'  => 'd_visualize/template/partial/d_name_field.twig',
                        'component' => array(
                            'd_name_field' => array(
                                'template' => 'd_visualize/template/component/d_name_field/default.twig'
                            )
                        )
                    ),
                    'd_custom_field'  => array(
                        'template'  => 'd_visualize/template/partial/d_custom_field.twig',
                        'component' => array(
                            'd_custom_field' => array(
                                'template' => 'd_visualize/template/component/d_custom_field/default.twig'
                            )
                        )
                    ),
                    'd_button' => array(
                        'template'  => 'd_visualize/template/partial/d_button.twig',
                        'component' => array(
                            'd_button' => array(
                                'template' => 'd_visualize/template/component/d_button/default.twig'
                            )
                        )
                    ),
                    'd_button_submit' => array(
                        'template'  => 'd_visualize/template/partial/d_button_submit.twig',
                        'component' => array(
                            'd_button_submit' => array(
                                'template' => 'd_visualize/template/component/d_button_submit/default.twig'
                            )
                        )
                    ),
                    'd_button_continue' => array(
                        'template'  => 'd_visualize/template/partial/d_button_continue.twig',
                        'component' => array(
                            'd_button_continue' => array(
                                'template' => 'd_visualize/template/component/d_button_continue/default.twig'
                            )
                        )
                    ),
                    'd_review'        => array(
                        'template'  => 'd_visualize/template/partial/d_review.twig',
                        'component' => array(
                            'd_review' => array(
                                'template' => 'd_visualize/template/component/d_review/default.twig'
                            )
                        )
                    ),
                    'd_notification'  => array(
                        'template'  => 'd_visualize/template/partial/d_notification.twig',
                        'component' => array(
                            'd_notification' => array(
                                'template' => 'd_visualize/template/component/d_notification/default.twig',
                            ),)
                    )
                ,
                ),
                'component'       => array(
                    'product_review' => array(
                        'template' => 'd_visualize/template/component/product_review/default.twig',

                    ),
                ),
            ),
            'block'  => array('main_wrapper', 'before_content', 'content', 'after_content')
        ),
        'common/home'      => array(
            'layout' => array(
                'partial' => array(
                    'breadcrumb' => array(
                        'template'  => 'd_visualize/template/partial/d_breadcrumb.twig', // here can be custom settings for this template
                        'component' => array(
                            'breadcrumb' => array(
                                'template' => 'd_visualize/template/component/d_breadcrumb/empty.twig'
                            )
                        )
                    ),
                )
            ),
        ),
        'product/product'  => array(
            'layout'  => array(
                'component' => array(
                    'product_product' => array(
                        'template' => 'd_visualize/template/component/product_product/default.twig',

                    ),

                    'product_options' => array(
                        'template' => 'd_visualize/template/component/product_options/default.twig',

                    )
                ),
            ),
            'scripts' => array(
                'catalog/view/javascript/d_bootstrap_rating/bootstrap-rating.min.js',
                'catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js',
            ),
            'styles'  => array(
                'catalog/view/javascript/d_bootstrap_rating/bootstrap-rating.css',
            )
        ),
        'product/category' => array(
            'layout'  => array(
                'component' => array(
                    'category_section' => array(
                        'template' => 'd_visualize/template/component/category_section/default.twig',
                    )
                ),
            ),
            'scripts' => array()
        ),
        'checkout/cart'    => array(
            'layout'  => array(
                'component' => array(
                    'checkout_cart' => array(
                        'template' => 'd_visualize/template/component/checkout_cart/default.twig',
                    )
                ),
            ),
            'scripts' => array()
        )
    ),
    'pre_scripts'   => array(
        'catalog/view/javascript/bootstrap/js/bootstrap.min.js',
        'catalog/view/javascript/jquery/jquery-2.1.1.min.js',
    ),
    'post_scripts'  => array(
        'catalog/view/theme/d_visualize/javascript/skin/default/default.js',
    ),
    'post_styles'   => array(
    ),
    'pre_styles'    => array(
        'https://use.fontawesome.com/releases/v5.0.13/css/all.css',
        'catalog/view/theme/d_visualize/stylesheet/core/lib/bootstrap3/stylesheets/bootstrap.css',
        'catalog/view/theme/d_visualize/stylesheet/core/lib/bootstrap4/bootstrap-grid.css',
        'https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700,900&subset=cyrillic',
    ),
    'custom_styles' => array(
        ''
    )
);
$_['config_theme_default'] = array(
    'size' => array(
        'product_thumb'      => array('width' => '707', 'height' => '707'),
    )
);