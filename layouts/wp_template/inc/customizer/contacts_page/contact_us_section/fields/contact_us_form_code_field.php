<?php

namespace VirgilSecurity\Customizer\ContactsPage\ContactUsSection\Fields;


use VirgilSecurity\Customizer\Fields\TextField;

class ContactUsFormCodeField extends TextField
{
    protected $optional = true;


    public function getLabel()
    {
        return __("Form shortcsode");
    }
}
