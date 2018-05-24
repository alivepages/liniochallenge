<?php
declare(strict_types=1);
namespace Linio\Challenge;

class SequenceWithReplace extends Sequence implements SequenceWithReplaceInterface
{
  /**
   * This method applies an replacement configuration to the entire sequence content
   *
   * @param object $sequence
   */
  public function replace(Replacer $replacer)
  {
    $this->content = array_map(
      array($replacer, 'replace'),
      $this->content
    );
  }

}
