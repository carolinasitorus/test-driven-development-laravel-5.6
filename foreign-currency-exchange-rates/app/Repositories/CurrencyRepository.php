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

    public function show($currencyId)
    {
        return $this->model->findOrFail($currencyId);
    }

    public function update($data)
    {
        $this->model->update($data);
        return $this->model;
    }

    public function delete()
    {
        $this->model->delete();
        return $this->model;
    }
}
