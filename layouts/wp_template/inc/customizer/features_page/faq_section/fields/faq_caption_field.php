<?php

namespace VirgilSecurity\Customizer\FeaturesPage\FaqSection\Fields;


use VirgilSecurity\Customizer\Fields\TextField;

class FaqCaptionField extends TextField
{
    protected $optional = true;


    public function getLabel()
    {
        return __("Caption");
    }
}
