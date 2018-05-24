<?php
declare(strict_types=1);

namespace Linio\Challenge;

use PHPUnit\Framework\TestCase;

class ReplaceAllTest extends TestCase
{
  public function testCanCreateReplaceAll()
  {
      $sequence = new SequenceWithReplace(100);
      $replaceAll = new ReplaceAll($sequence, array());
      $this->assertTrue(is_object($replaceAll));
  }

  public function testReplaceAll()
  {
      $sequence = new SequenceWithReplace(3);
      $replacers = array (
        new Replacer(2, "a"),
      );
      $replaceAll = new ReplaceAll($sequence, $replacers);
      $result = $replaceAll->getReplacedSequence();
      $this->assertSame(array(1, 'a', 3), $result->getContent());
  }

  public function testReplaceAllMultiples()
  {
      $sequence = new SequenceWithReplace(4);
      $replacers = array (
        new Replacer(2, "a"),
        new Replacer(4, "b")
      );
      $replaceAll = new ReplaceAll($sequence, $replacers);
      $result = $replaceAll->getReplacedSequence();
      $this->assertSame(array(1, 'a', 3, 'b'), $result->getContent());
  }

  public function testReplaceAllMultiplesInverse()
  {
      $sequence = new SequenceWithReplace(4);
      $replacers = array (
        new Replacer(4, "b"),
        new Replacer(2, "a")
      );
      $replaceAll = new ReplaceAll($sequence, $replacers);
      $result = $replaceAll->getReplacedSequence();
      $this->assertSame(array(1, 'a', 3, 'b'), $result->getContent());
  }

  public function testReplaceAllLimitCase()
  {
      $sequence = new SequenceWithReplace(4);
      $replacers = array ();
      $replaceAll = new ReplaceAll($sequence, $replacers);
      $result = $replaceAll->getReplacedSequence();
      $this->assertSame(array(1, 2, 3, 4), $result->getContent());
  }

}
