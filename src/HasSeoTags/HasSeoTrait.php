<?php

namespace Josvar\SeoTags\HasSeoTags;

trait HasSeoTagsTrait
{

    public static function bootHasSeoTagsTrait()
    {
        
    }

    public function seotags()
    {
        return $this->morphOne(config('seotags.seotags_model'), 'seoable');
    }

    public function addSeoTags()
    {
        return '';
    }

}
