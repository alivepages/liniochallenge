<?php
declare(strict_types=1);
namespace Linio\Challenge;

class Sequence implements SequenceInterface
{
  /** @var int */
  protected $number;

  /** @var array */
  protected $content;

  /**
   * Constructor, create an object that is a sequence of numbers from 1 to number
   *
   * @param int $number
   */
  public function __construct(int $number)
  {
    $this->number = $number;
    $this->fill();
  }

  /**
   * Create a sequence of numbers from 1 to number
   */
  public function fill()
  {
    $this->content = range(1, $this->number);
  }

  /**
   * Get the content
   *
   * @return array content of sequence
   */
  public function getContent()
  {
    return $this->content;
  }

}
