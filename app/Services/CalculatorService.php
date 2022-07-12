<?php

namespace App\Services;

/**
 * Responsible for delivering the 'calculator' logic
 */

 class CalculatorService {
    public function add($x, $y) {
        return $x + $y;
    }

    public function sub($x, $y) {
        return $x - $y;
    }
 }
