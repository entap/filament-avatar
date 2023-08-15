<?php

namespace Entap\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;

class AvatarColumn extends Column
{
    protected string $view = 'filament-avatar::tables.columns.avatar-column';

    public string|\Closure|null $avatar = null;

    public function avatar(string|\Closure|null $avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->evaluate($this->avatar);
    }
}