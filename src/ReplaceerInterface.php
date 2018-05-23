<?php
declare(strict_types=1);
namespace Linio\Challenge;

interface ReplaceerInterface
{
    public function replace(string $item): string;
}
