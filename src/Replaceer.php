<?php
declare(strict_types=1);
namespace Linio\Challenge;

class Replaceer implements ReplaceerInterface
{
  /** @var int */
  protected $divider;

  /** @var string */
  protected $text;

  /**
   * @param int $divider
   * @param string $text
   */
  public function __construct(int $divider, string $text)
  {
      $this->divider = $divider;
      $this->text = $text;
  }

  /**
   * @param string $item
   *
   * @return string Returns the item replaced if it is divisible
   */
  public function replace(string $item): string
  {
    if (fmod ((integer) $item, $this->divider)) {
      return $item;
    }
    return $this->text;
  }

}
