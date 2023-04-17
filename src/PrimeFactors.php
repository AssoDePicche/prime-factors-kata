<?php

declare(strict_types=1);

final class PrimeFactors
{
    public function of(int $n): array
    {
        if ($n > 1) {
            return [$n];
        }

        return [];
    }
}
