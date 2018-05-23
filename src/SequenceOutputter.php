<?php
declare(strict_types=1);
namespace Linio\Challenge;

class SequenceOutputter {

    protected $sequence;

    public function __construct(Sequence $sequence)
    {
        $this->sequence = $sequence;
    }

    public function toText()
    {
        return implode('', $this->sequence->getContent());
    }
}
