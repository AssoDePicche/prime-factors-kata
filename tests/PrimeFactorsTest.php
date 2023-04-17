<?php

declare(strict_types=1);

final class PrimeFactorsTest extends \PHPUnit\Framework\TestCase
{
  private readonly PrimeFactors $primeFactors;

  public function setUp(): void
  {
    $this->primeFactors = new PrimeFactors;
  }

  public function test_one_should_return_an_empty_array(): void
  {
    $result = $this->primeFactors->of(1);

    $this->assertSame([], $result);
  }
}
