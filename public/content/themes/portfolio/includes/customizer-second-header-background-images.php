<?php


// STEP WP-CUSTOMIZER-00 enregistrement du hook pour activer notre customizer
// DOC WP-CUSTOMIZER : https://codex.wordpress.org/Theme_Customization_API

add_action(
    'customize_register',
    'portfolio_second_header_background_images_customizer'
);


// STEP WP-CUSTOMIZER-01 déclaration de la fonction configurant le customizer
// NOTICE une section vide ne s'affiche pas dans le backoffice
function portfolio_second_header_background_images_customizer($wpTheme)
{

    // STEP WP-CUSTOMIZER-02 déclaration de la "section" dans laquelle sera disponible notre customizer

    $wpTheme->add_section(
        'custom-second-background-images', // identifiant de la section
        // il faut donner les options de configuration de la section (sous forme de tablea)
        [
            'title' => 'Second background images',
            'priority' => 0
        ]
    );


    // STEP WP-CUSTOMIZER-03 déclaration de la "variable" pour laquelle nous utiliserons un customizer pour en choisir la valeur

    $wpTheme->add_setting(
        // identifiant (nom) de la variable qui utilisera le customizer
        'header-second-background-image',
        // tableau d'option pour notre variable
        [
            'default' => 'https://bstatic.com/xdata/images/xphoto/1182x887/82877075.jpg?k=db9e00135b7b8f038aad88a7676235667ca249a5eed997a499677812fa332833&o=?size=S',

            // cette option  permet de spécifier la technique qui sera utilisée pour gérer la preview dans le backoffice
            'transport' => 'postMessage',
        ]
    );

    // STEP WP-CUSTOMIZER-04 déclaration du composant d'UX qui sera utilisé pour donner une valeur à notre variable

    // NOTICE "Un control" est le terme utilisé en anglais pour parler d'un élément d'ux
    // nous décidons  d'utiliser le gestion de média de worpress pour donner une valeur à la "variable" header-background-image


    $secondImageBackgroundSelector = new WP_Customize_Image_Control(
        // Le premier argument à passer est l'objet nous permettant de communiquer avec le customiser du thème wordpress
        $wpTheme,
        // idenfiant du control
        'header-second-background-images-control',
        // options du control
        [
            'label' => 'Choose header images',

            // dans quelle section nous pourrons aller modifier l'image du header
            'section' => 'custom-second-background-images',
            // settings permet de dire quelle variable sera modifié par le composant
            'settings' => 'header-second-background-image'
        ]
    );

    // STEP WP-CUSTOMIZER-05, enregistrement du composant pour configurer notre variable
    $wpTheme->add_control(
        // add_control attend une instance de "Control" (élément d'UX)
        $secondImageBackgroundSelector
    );






}
