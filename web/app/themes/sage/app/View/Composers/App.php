<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

require_once(get_theme_root() . '/sage/post-types/album.php' );
require_once(get_theme_root() . '/sage/taxonomies/artist.php');

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
    public function getHeaderLogo(){
        return get_template_directory_uri() . '/ressources/images/logo.svg';
    }
    public function getLanguageOptions(){
        if(!funtion_exists('pll_the_languages'))return;
        return array(
            'language_menu' => pll_the_languages( array('raw' => 1)),
            'current_language' => pll_current_language()
        );
    }

}
