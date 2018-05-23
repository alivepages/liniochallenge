<?php
declare(strict_types=1);

namespace Linio\Challenge;

use PHPUnit\Framework\TestCase;

class SequenceTest extends TestCase
{
  public function testCanCreateSequence()
  {
      $sequence = new Sequence(100);
      $this->assertTrue(is_object($sequence));
  }

  public function testSequence()
  {
      $sequence = new Sequence(3);
      $this->assertSame(array(1, 2, 3), $sequence->getContent());
  }

  public function testSequenceDynamic()
  {
      $sequence = new Sequence(5);
      $this->assertSame(array(1, 2, 3, 4, 5), $sequence->getContent());
  }

  public function testSequenceLimitCase()
  {
      $sequence = new Sequence(1);
      $this->assertSame(array(1), $sequence->getContent());
  }

  public function testSequenceInverse()
  {
      $sequence = new Sequence(-2);
      $this->assertSame(array(1, 0, -1, -2), $sequence->getContent());
  }

}
