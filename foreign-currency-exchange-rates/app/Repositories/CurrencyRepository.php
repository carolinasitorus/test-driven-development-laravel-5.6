<?php

namespace app\Repositories;

use app\Models\Currency;

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