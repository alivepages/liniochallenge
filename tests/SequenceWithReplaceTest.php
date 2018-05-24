<?php
declare(strict_types=1);

namespace Linio\Challenge;

use PHPUnit\Framework\TestCase;

class SequenceWithReplaceTest extends TestCase
{
  public function testCanCreateSequence()
  {
      $sequence = new SequenceWithReplace(100);
      $this->assertTrue(is_object($sequence));
  }

  public function testReplacerInstance()
  {
      $sequence = new SequenceWithReplace(100);
      $this->assertTrue($sequence instanceof SequenceWithReplaceInterface);
  }

  public function testSequence()
  {
      $sequence = new SequenceWithReplace(3);
      $this->assertSame(array(1, 2, 3), $sequence->getContent());
  }

  public function testSequenceDynamic()
  {
      $sequence = new SequenceWithReplace(5);
      $this->assertSame(array(1, 2, 3, 4, 5), $sequence->getContent());
  }

  public function testSequenceLimitCase()
  {
      $sequence = new SequenceWithReplace(1);
      $this->assertSame(array(1), $sequence->getContent());
  }

  public function testSequenceInverse()
  {
      $sequence = new SequenceWithReplace(-2);
      $this->assertSame(array(1, 0, -1, -2), $sequence->getContent());
  }

  public function testExistsReplace()
  {
      $sequence = new SequenceWithReplace(3);
      $this->assertTrue(method_exists($sequence, 'replace'));
  }

}
