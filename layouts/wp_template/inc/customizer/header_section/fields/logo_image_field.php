<?php
namespace VirgilSecurity\Customizer\HeaderSection\Fields;


use VirgilSecurity\Customizer\Fields\ImageField;

class LogoImageField extends ImageField
{
    protected $priority = 1;


    public function getLabel()
    {
        return __('Select logo image');
    }
}
