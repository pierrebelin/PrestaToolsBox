/**
 * File created: Monday, 13th April 2020
 * @author Pierre Belin (contact@pierrebelin.fr)
 * @copyright 2019-2020 Pierre Belin
 */


<?php

class PBelin_Tools extends Module
{
    public function __construct()
    {
        $this->name = 'pbelin_tools';
        $this->tab = 'analytics_stats';
        $this->version = '1.0';
        $this->author = 'Pierre Belin';
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Boite à outils');
        $this->description = $this->l('Ma description');
    }

    public function install()
    {
        if (parent::install()) {
            return true;
        }

        return false;
    }

    public function uninstall()
    {
        if (parent::uninstall()) {
            return true;
        }

        return false;
    }
}
