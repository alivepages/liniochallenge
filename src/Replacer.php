<?php
declare(strict_types=1);
namespace Linio\Challenge;

class Replacer implements ReplacerInterface
{
  /** @var int */
  protected $divider;

  /** @var string */
  protected $text;

  /**
   * Constructor, creates an object that configures the replacements
   *
   * @param int $divider
   * @param string $text
   */
  public function __construct(int $divider, string $text)
  {
      $this->divider = $divider;
      $this->text = $text;
  }

  /**
   * This method check if an item is divisible, if so, make the replacement by text
   *
   * @param string $item
   * @return string Returns the item replaced if it is divisible
   */
  public function replace($item)
  {
    if (!is_int($item) || fmod ($item, $this->divider)) {
      return $item;
    }
    return $this->text;
  }

}
