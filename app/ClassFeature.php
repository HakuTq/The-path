<?php

namespace App;

use App\Enums\ClassEnum;
use App\Enums\ClassFeaturesEnum;

class ClassFeature
{
    public ClassEnum $class;
    public ClassFeaturesEnum $classFeature;
    public int $level;
    /**
     * Create a new class instance.
     */
    public function __construct(ClassEnum $class, ClassFeaturesEnum $classFeature, int $level)
    {
        $this->class = $class;
        $this->classFeature = $classFeature;
        $this->level = $level;
    }
}
