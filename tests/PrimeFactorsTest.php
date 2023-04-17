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
    $this->assertSame([], $this->primeFactors(1));
  }

  public function test_two_should_return_an_array_with_a_two(): void
  {
    $this->assertSame([2], $this->primeFactors(2));
  }

  public function test_three_should_return_an_array_with_a_three(): void
  {
    $this->assertSame([3], $this->primeFactors(3));
  }

  public function test_four_should_return_an_array_with_two_two(): void
  {
    $this->assertSame([2, 2], $this->primeFactors(4));
  }

  public function test_five_should_return_an_array_with_a_five(): void
  {
    $this->assertSame([5], $this->primeFactors(5));
  }

  public function test_six_should_return_an_array_with_a_two_and_a_three(): void
  {
    $this->assertSame([2, 3], $this->primeFactors(6));
  }

  private function primeFactors(int $n): array
  {
    return $this->primeFactors->of($n);
  }
}
