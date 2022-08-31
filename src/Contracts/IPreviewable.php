<?php

namespace Cruxinator\LaravelAttachmentsMedia\Contracts;

use Cruxinator\LaravelAttachmentsMedia\Models\ResizablePicture;

interface IPreviewable
{
    public function getPreviewAttribute(): ?ResizablePicture;
}
