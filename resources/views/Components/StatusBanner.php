<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class StatusBanner extends Component
{
    public function __construct(
        public string $message,
        public bool $darkMode = false
    ) {
    }

    public function render(): View
    {
        return view('components.status-banner');
    }
}