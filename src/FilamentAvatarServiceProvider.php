<?php

namespace Entap;

use Illuminate\Support\ServiceProvider;

class FilamentAvatarServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-avatar');
    }
}