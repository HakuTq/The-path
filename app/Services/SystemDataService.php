<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class SystemDataService
{
    /**
     * Get all class features, caching the result forever.
     * (Remember to clear your cache via php artisan cache:clear when you edit the JSONs!)
     */
    public function getAllClassFeatures(): array
    {
        return Cache::rememberForever('system_class_features', function () {
            $features = [];
            $path = resource_path('data/classes');

            // Loop through all JSON files in the classes folder
            foreach (File::files($path) as $file) {
                if ($file->getExtension() === 'json') {
                    $data = json_decode(file_get_contents($file->getPathname()), true);
                    // Merge them together. 
                    $features = array_merge($features, $data);
                }
            }

            // Remove the $schema key if it exists, since we don't need it in the app logic
            unset($features['$schema']);

            return $features;
        });
    }
}
