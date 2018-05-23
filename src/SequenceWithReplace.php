<?php
declare(strict_types=1);
namespace Linio\Challenge;

class SequenceWithReplace extends Sequence implements SequenceWithReplaceInterface
{
  public function replace(Replaceer $replaceer) {
    $this->content = array_map(
      array($replaceer, 'replace'),
      $this->content
    );
  }

}
