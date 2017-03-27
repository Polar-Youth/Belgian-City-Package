<?php

namespace PolarYouth\Cities\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cities
 *
 * @package PolarYouth\Cities\Models
 */
class Cities extends Model
{
    /**
     * The database table name.
     *
     * @var string
     */
    protected $table = 'belgian_cities';

    /**
     * The mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['province_id', 'postal_code', 'name', 'lat', 'lng'];

    /**
     * Get the province data for a city.
     *
     * @return mixed
     */
    public function province()
    {
        return $this->belongsTo(Provinces::class, 'province_id');
    }
}