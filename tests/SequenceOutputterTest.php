<?php
declare(strict_types=1);

namespace Linio\Challenge;

use PHPUnit\Framework\TestCase;

class SequenceOutputterTest extends TestCase
{
  public function testCanCreateSequenceOutputter()
  {
      $sequence = new Sequence(5);
      $sequenceOutputter = new SequenceOutputter($sequence);
      $this->assertTrue(is_object($sequenceOutputter));
  }

  public function testSequenceOutputter()
  {
      $sequence = new Sequence(5);
      $sequenceOutputter = new SequenceOutputter($sequence);
      $result = $sequenceOutputter->toText();
      $this->assertSame('12345', $result);
  }

}
