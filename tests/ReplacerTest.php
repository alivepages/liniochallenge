<?php
declare(strict_types=1);

namespace Linio\Challenge;

use PHPUnit\Framework\TestCase;

class ReplacerTest extends TestCase
{
  public function testCanCreateReplacer()
  {
      $replacer = new Replacer(2, 'dos');
      $this->assertTrue(is_object($replacer));
  }

  public function testReplacerInstance()
  {
      $replacer = new Replacer(2, 'dos');
      $this->assertTrue($replacer instanceof ReplacerInterface);
  }

  public function testReplacerEqual()
  {
      $replacer = new Replacer(2, 'dos');
      $result = $replacer->replace(2);
      $this->assertSame('dos', $result);
  }

  public function testReplacerSi()
  {
      $replacer = new Replacer(2, 'dos');
      $result = $replacer->replace(8);
      $this->assertSame('dos', $result);
  }

  public function testReplacerNo()
  {
      $replacer = new Replacer(2, 'dos');
      $result = $replacer->replace(9);
      $this->assertSame(9, $result);
  }

  public function testReplacerString()
  {
      $replacer = new Replacer(2, 'dos');
      $result = $replacer->replace('4');
      $this->assertSame('4', $result);
  }

}
