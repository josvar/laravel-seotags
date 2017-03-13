<?php

namespace Josvar\SeoTags;

use Illuminate\Database\Eloquent\Model;

class SeoTags extends Model
{
    public function seoable()
    {
        return $this->morphTo();
    }
}
