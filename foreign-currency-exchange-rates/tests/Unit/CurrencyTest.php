<?php

namespace Tests\Unit;

use App\Models\Currency;
use App\Repositories\CurrencyRepository;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CurrencyTest extends TestCase
{
    /**
     * Test create function in CurrencyRepository.
     *
     * @return void
     */
    public function testCreate()
    {
    	$faker = Faker::create();
    	$currencyRepo = new CurrencyRepository(new Currency);

        $data = [
            'name' => $faker->sentence(1),
            'description' => $faker->paragraph(2)
        ];

        $currency = $currencyRepo->create($data);

        $this->assertInstanceOf(Currency::class, $currency);
        $this->assertEquals($data['name'], $currency->name);
        $this->assertEquals($data['description'], $currency->description);
    }
}
