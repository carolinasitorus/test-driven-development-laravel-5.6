<?php

namespace App\Repositories;

use App\Models\Currency;

class CurrencyRepository
{
    public function __construct(Currency $currency)
    {
        $this->model = $currency;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }
}
