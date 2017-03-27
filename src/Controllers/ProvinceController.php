<?php

namespace PolarYouth\Cities\Controller;

use App\Http\Controllers\Controller;
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
     * ProvinceController constructor.
     *
     * @param Provinces $province
     */
    public function __construct(Provinces $province)
    {
        $this->province = $province;
    }

    public function getCitiesAntwerp()
    {

    }

    public function getCitiesLimburg()
    {

    }
}