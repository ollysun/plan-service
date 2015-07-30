<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TerritoryToCountries extends Model {


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'territory_countries';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    protected $primaryKey = 'id';//@TODO change
    protected $guarded = [''];



    /**
     * Get the provider record associated with the plan.
     */

    public function Territory()
    {
        return $this->belongsTo('App\Models\Territories');
    }


}
