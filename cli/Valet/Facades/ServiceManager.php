<?php

namespace Valet\Facades;

use Illuminate\Support\Collection;

interface ServiceManager
{
    public function restartService($services): void;

    public function stopService($services): void;

    public function getAllRunningServices(): Collection;

    public function isServiceRunning(string $service): bool;

    public function isAvailable(): bool;
}
