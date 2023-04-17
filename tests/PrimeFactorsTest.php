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

  public function test_two_should_return_an_array_with_a_two(): void
  {
    $result = $this->primeFactors->of(2);

    $this->assertSame([2], $result);
  }

  public function test_three_should_return_an_array_with_a_three(): void
  {
    $result = $this->primeFactors->of(3);

    $this->assertSame([3], $result);
  }
}
