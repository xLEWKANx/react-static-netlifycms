<?php

namespace VirgilSecurity\Models;


use VirgilSecurity\Models\FeaturesPage\CryptogramSectionModel;
use VirgilSecurity\Models\FeaturesPage\IntroSectionModel;

use VirgilSecurity\Models\Src\LayoutModel;


class FeaturesPageModel extends LayoutModel
{
    public function IntroSection()
    {
        return new IntroSectionModel();
    }


    public function CryptogramSection()
    {
        return new CryptogramSectionModel();
    }
}
