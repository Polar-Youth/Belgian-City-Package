<?php

namespace PolarYouth\Cities\Controllers;

use App\Http\Controllers\Controller;
use PolarYouth\Cities\Models\Cities;
use PolarYouth\Cities\Models\Provinces;

/**
 * Class ProvinceController
 *
 * @package PolarYouth\Cities\Controller
 */
class ProvinceController extends Controller
{
    /**
     * The province model.
     *
     * @var Provinces
     */
    private $province;

    /**
     * The city model.
     *
     * @var Cities
     */
    private $cities;

    /**
     * ProvinceController constructor.
     *
     * @param Provinces $province
     */
    public function __construct(Provinces $province, Cities $cities)
    {
        $this->cities   = $cities;
        $this->province = $province;
    }

    public function getProvinces()
    {

    }
}