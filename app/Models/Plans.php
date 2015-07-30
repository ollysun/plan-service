<?php namespace Plans\Models;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model {


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plans';

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
    public function Provider()
    {
        return $this->hasOne('Plans\Models\ProviderTerritory','id','provider_id');
    }


}
