<?php

namespace Cruxinator\LaravelAttachmentsMedia;

use Cruxinator\Package\Package;
use Cruxinator\Package\PackageServiceProvider;

class LaravelAttachmentsMediaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-attachments-media');
        $subModules = config('attachment_sub_models');
        $subModules = array_merge($subModules, [
        Cruxinator\LaravelAttachmentsMedia\Models\Media::class,
        Cruxinator\LaravelAttachmentsMedia\Models\Document::class,
        Cruxinator\LaravelAttachmentsMedia\Models\Archive::class,
    ]);
        config(['attachment_sub_models' => $subModules]);
    }
}
