<?php

namespace PolarYouth\Cities\Controller;

use App\Http\Controllers\Controller;
use PolarYouth\Cities\Models\Cities;

/**
 * Class CityController
 *
 * @package PolarYouth\Cities\Controller
 */
class CityController extends Controller
{
    /**
     * @var Cities
     */
    private $city;

    /**
     * CityController constructor.
     * @param Cities $city
     */
    public function __construct(Cities $city)
    {
        $this->city = $city;
    }

    /**
     * Find a city by his postal code.
     *
     * @param  int $name
     * @return mixed
     */
    public function findByCode($name)
    {
        return $this->city->where('postal_code', $name)->get();
    }

    /**
     * Find a city by his name.
     *
     * @param  string $name
     * @return mixed
     */
    public function findByName($name)
    {
        return $this->city->where('name', $name)->get();
    }

    /**
     * Get all the cities.
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function allCities()
    {
        $query = $this->city->with('province');
        return $query->get();
    }

    public function getByProvince()
    {

    }
}