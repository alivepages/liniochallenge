<?php
declare(strict_types=1);
namespace Linio\Challenge;

class ReplaceAll
{
  /** @var  object */
  protected $sequence;

  /** @var  array */
  protected $replaceers;

  /**
   * @param object $sequence
   *
   * @param array $replaceers
   */
  public function __construct(SequenceWithReplace $sequence, array $replaceers)
  {
      $this->sequence = $sequence;
      $this->replaceers = $replaceers;
  }

  public function getReplacedSequence()
  {
    arsort($this->replaceers);
    array_map(
      array($this->sequence, 'replace'),
      $this->replaceers
    );
    return $this->sequence;
  }

}
