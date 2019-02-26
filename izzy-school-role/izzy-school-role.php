<?php
/*
Plugin Name: iZZY's School Role Plugin
Version: 1.0
Description: :-) You now have roles for Students, Teachers, Principals, Superintendents!  WordPress plugin that adds roles and permissions for members of a school.
Author: iZZY
*/

defined( 'ABSPATH' ) || die();

add_role( 'student', __( 'Student' ),
        array(
            'read' => true,
            'list_users' => false,
            'edit_users' => false,
            'add_users' => false,
            'create_users' => false,
            'delete_users' => false,
            'remove_users' => false,
            'delete_pages' => false,
            'delete_posts' => false,
            'delete_private_pages' => false,
            'delete_private_posts' => false,
            'delete_published_pages' => false,
            'delete_published_posts' => false,
            'delete_others_pages' => false,
            'delete_others_posts' => false,
            'edit_dashboard' => false,
            'edit_files' => false,
            'edit_pages' => false,
            'edit_posts' => false,
            'edit_private_pages' => false,
            'edit_private_posts' => false,
            'edit_published_pages' => false,
            'edit_published_posts' => false,
            'edit_others_pages' => false,
            'edit_others_posts' => false,
            'edit_theme_options' => false,
            'manage_categories' => false,
            'manage_links' => false,
            'manage_options' => false,
            'moderate_comments' => false,
            'publish_pages' => false,
            'publish_posts' => false,
            'read_private_pages' => false,
            'read_private_posts' => false,
            'switch_themes' => false,
            'unfiltered_upload' => false,
            'upload_files' => false
        )
    );

add_role( 'beheerder', __( 'Principal' ),  //Administrator
        array(
            'read' => true,
            'list_users' => true,
            'edit_users' => true,
            'add_users' => false,
            'create_users' => false,
            'delete_users' => false,
            'remove_users' => false,
            'delete_pages' => false,
            'delete_posts' => false,
            'delete_private_pages' => false,
            'delete_private_posts' => false,
            'delete_published_pages' => false,
            'delete_published_posts' => false,
            'delete_others_pages' => false,
            'delete_others_posts' => false,
            'edit_dashboard' => false,
            'edit_files' => false,
            'edit_pages' => false,
            'edit_posts' => false,
            'edit_private_pages' => false,
            'edit_private_posts' => false,
            'edit_published_pages' => false,
            'edit_published_posts' => false,
            'edit_others_pages' => false,
            'edit_others_posts' => false,
            'edit_theme_options' => false,
            'manage_categories' => false,
            'manage_links' => false,
            'manage_options' => false,
            'moderate_comments' => false,
            'publish_pages' => false,
            'publish_posts' => false,
            'read_private_pages' => false,
            'read_private_posts' => false,
            'switch_themes' => false,
            'unfiltered_upload' => false,
            'upload_files' => false
        )
    );


    add_role( 'leerkracht', __( 'Teacher' ), //Teacher
            array(
                'read' => true,
                'list_users' => true,
                'edit_users' => true,
                'add_users' => false,
                'create_users' => false,
                'delete_users' => false,
                'remove_users' => false,
                'delete_pages' => false,
                'delete_posts' => false,
                'delete_private_pages' => false,
                'delete_private_posts' => false,
                'delete_published_pages' => false,
                'delete_published_posts' => false,
                'delete_others_pages' => false,
                'delete_others_posts' => false,
                'edit_dashboard' => false,
                'edit_files' => false,
                'edit_pages' => false,
                'edit_posts' => false,
                'edit_private_pages' => false,
                'edit_private_posts' => false,
                'edit_published_pages' => false,
                'edit_published_posts' => false,
                'edit_others_pages' => false,
                'edit_others_posts' => false,
                'edit_theme_options' => false,
                'manage_categories' => false,
                'manage_links' => false,
                'manage_options' => false,
                'moderate_comments' => false,
                'publish_pages' => false,
                'publish_posts' => false,
                'read_private_pages' => false,
                'read_private_posts' => false,
                'switch_themes' => false,
                'unfiltered_upload' => false,
                'upload_files' => false
            )
        );


        add_role(
                'intern_begeleider', __( 'Superintendent' ),
                array(
                    'read' => true,
                    'list_users' => true,
                    'edit_users' => true,
                    'add_users' => false,
                    'create_users' => false,
                    'delete_users' => false,
                    'remove_users' => false,
                    'delete_pages' => false,
                    'delete_posts' => false,
                    'delete_private_pages' => false,
                    'delete_private_posts' => false,
                    'delete_published_pages' => false,
                    'delete_published_posts' => false,
                    'delete_others_pages' => false,
                    'delete_others_posts' => false,
                    'edit_dashboard' => false,
                    'edit_files' => false,
                    'edit_pages' => false,
                    'edit_posts' => false,
                    'edit_private_pages' => false,
                    'edit_private_posts' => false,
                    'edit_published_pages' => false,
                    'edit_published_posts' => false,
                    'edit_others_pages' => false,
                    'edit_others_posts' => false,
                    'edit_theme_options' => false,
                    'manage_categories' => false,
                    'manage_links' => false,
                    'manage_options' => false,
                    'moderate_comments' => false,
                    'publish_pages' => false,
                    'publish_posts' => false,
                    'read_private_pages' => false,
                    'read_private_posts' => false,
                    'switch_themes' => false,
                    'unfiltered_upload' => false,
                    'upload_files' => false
                )
            );

            function izzy_school_role_deactivation() {
              remove_role( 'student' );
              remove_role( 'Principal' );
              remove_role( 'Teacher' );
              remove_role( 'Superintendent' );
              }

            register_deactivation_hook( __FILE__, 'izzy_school_role_deactivation' );
