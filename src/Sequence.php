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
   * @param int $number
   */
  public function __construct(int $number)
  {
    $this->number = $number;
    $this->fill();
  }

  public function fill()
  {
    $this->content = range(1, $this->number);
  }

  public function getContent() {
    return $this->content;
  }

}
