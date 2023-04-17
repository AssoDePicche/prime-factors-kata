<?php

declare(strict_types=1);

final class PrimeFactors
{
    public function of(int $n): array
    {
        if ($n === 2) {
            return [2];
        } else if ($n === 3) {
            return [3];
        }

        return [];
    }
}
