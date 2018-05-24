<?php
declare(strict_types=1);
namespace Linio\Challenge;

class ReplaceAll
{
  /** @var  object */
  protected $sequence;

  /** @var  array */
  protected $replacers;

  /**
   * Constructor, creates an object with the sequence to alter and all replacers
   *
   * @param object $sequence
   * @param array $replacers
   */
  public function __construct(SequenceWithReplace $sequence, array $replacers)
  {
      $this->sequence = $sequence;
      $this->replacers = $replacers;
  }

  /**
   * This methos execute all replacements
   *
   * @return object replaced sequence
   */
  public function getReplacedSequence()
  {
    // order to apply the largest dividers first
    arsort($this->replacers);
    array_map(
      array($this->sequence, 'replace'),
      $this->replacers
    );
    return $this->sequence;
  }

}
