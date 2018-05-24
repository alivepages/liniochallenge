<?php
declare(strict_types=1);
namespace Linio\Challenge;

class SequenceOutputter {

    /** @var object */
    protected $sequence;

    /**
     * Constructor, create an object responsible for the screen output of the sequence
     *
     * @param object $sequence
     */
    public function __construct(Sequence $sequence)
    {
        $this->sequence = $sequence;
    }

    /**
     * This method convert the sequence to text
     *
     * @return string
     */
    public function toText()
    {
        return implode('', $this->sequence->getContent());
    }
}
