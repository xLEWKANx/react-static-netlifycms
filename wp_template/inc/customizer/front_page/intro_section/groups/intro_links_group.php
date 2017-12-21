<?php

namespace VirgilSecurity\Customizer\FrontPage\IntroSection\Groups;


use VirgilSecurity\Customizer\Groups\LinksGroup;

class IntroLinksGroup extends LinksGroup
{
    protected $optional = true;

    public function __construct()
    {
        $this->setRowLabel('link_text', __('intro link'));

        parent::__construct('hp_intro_section_links', __('Intro links'));
    }
}