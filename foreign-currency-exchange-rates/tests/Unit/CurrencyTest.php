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
            'name' => $faker->name,
            'description' => $faker->sentence(2)
        ];

        $currency = $currencyRepo->create($data);

        $this->assertInstanceOf(Currency::class, $currency);
        $this->assertEquals($data['name'], $currency->name);
        $this->assertEquals($data['description'], $currency->description);
    }

    /**
     * Test show function in CurrencyRepository.
     *
     * @return void
     */
    public function testShow()
    {
        $currency = factory(Currency::class)->create();
        $currencyRepo = new CurrencyRepository(new Currency);
        $found = $currencyRepo->show($currency->id);

        $this->assertInstanceOf(Currency::class, $currency);
        $this->assertEquals($found->name, $currency->name);
        $this->assertEquals($found->description, $currency->description);
    }

    /**
     * Test update function in CurrencyRepository.
     *
     * @return void
     */
    public function testUpdate()
    {
        $currency = factory(Currency::class)->create();
        $currencyRepo = new CurrencyRepository($currency);
        $delete = $currencyRepo->delete();

        $this->assertInstanceOf(Currency::class, $currency);
        $this->assertEquals($delete->name, $currency->name);
        $this->assertEquals($delete->description, $currency->description);
        $this->assertNotNull($delete->deleted_at);
    }
}
