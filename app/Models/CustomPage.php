<?php

namespace App\Models;

use Z3d0X\FilamentFabricator\Models\Page;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Z3d0X\FilamentFabricator\Models\Contracts\Page as Contract;

class CustomPage extends Page
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable(['active']);
    }
}
