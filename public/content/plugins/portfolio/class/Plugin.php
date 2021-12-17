<?php

namespace Portfolio;

class Plugin 
{

    public function __construct()
    {
        add_action(
            'init',
            [$this, 'createMyProfileCustomPostType']
        );

        add_action(
            'init',
            [$this, 'createSkillCustomTaxonomie']
        );

        add_action(
            'init',
            [$this, 'createExperienceCustomPostType']
        );
    }

    public function activate()
    {

    }

    public function deactivate()
    {

    }

    public function createSkillCustomTaxonomie()
    {
        register_taxonomy(
            'skill',
            ['my-profile'],
            [
                'label' => 'Skills',
                'hierarchical' => true,
                'public' => true
            ]
        );
    }

    public function createMyProfileCustomPostType()
    {
        register_post_type(
            'my-profile',
            [
                'label' => 'Mon profil',
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => 'dashicons-smiley',

                'supports' => [
                    'title',
                    'thumbnail',
                    'editor'
                ]

            ]
        );
    }

    public function createExperienceCustomPostType()
    {
        register_post_type(
            'experience',
            [
                'label' => 'Mon experience',
                'public' => true,
                'hierarchical' => false,
                'menu_icon' => 'dashicons-book',

                'supports' => [
                    'title',
                    'thumbnail',
                    'editor'
                ]

            ]
        );
    }
}