<?php

use Ahurkatolto\Aforizma\Aforizma;

if (!function_exists('aforizma')) {
    /**
     * Get a random aforizma model, with same day shipping, totally free of charge.
     */
    function aforizma(): Aforizma
    {
        return Aforizma::random();
    }
}
