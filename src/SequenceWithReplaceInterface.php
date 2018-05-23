<?php
declare(strict_types=1);
namespace Linio\Challenge;

interface SequenceWithReplaceInterface extends SequenceInterface
{
    public function replace(Replaceer $replaceer);
}
