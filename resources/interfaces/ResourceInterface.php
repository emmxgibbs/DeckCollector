<?php

namespace DeckCollector\Resources\Interfaces;

use Illuminate\Support\Facades\App\Models\Model;

/**
 * Interface ResourceInterface
 *
 * @package Pokemon\Resources\Interfaces
 */
interface ResourceInterface
{

    /**
     * @return array
     */
    public function all();

}