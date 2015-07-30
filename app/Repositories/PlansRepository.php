<?php namespace Plans\Repositories;

/*@ 1. TODO use DI to Inject PlansMapper and Plans Model in repo using APP bind
// App::bind('Plans\Repositories\IPlansRepository', 'Plans\Repositories\PlansRepository');
2. Exceptions
*/


use Plans\Mapper\PlansMapper;
use Plans\Models\Plans;


class PlansRepository implements IPlansRepository
{


    public static function getPlansByPlatformProviderGeo($platform ,$iso3, $provider)
    {
        $getPlans =  Plans::where('plans.is_active', '=', 1)
            ->where('plans.platform', '=', 'all')
            ->join('provider_territory','plans.provider_id','=','provider_territory.id')
            ->join('territories','provider_territory.territory_id','=','territories.id')
            ->where('provider_territory.name', '=', 'stripe')
            ->join('territory_countries','territories.id','=','territory_countries.territory_id')
            ->where('territory_countries.iso3', '=', 'usa')
            ->get();

        return PlansMapper::map($getPlans);
    }

    public function getPlanById($id)
    {
        return Plans::find($id);
    }

    public function createOrUpdate($id = null)
    {
        if(is_null($id)) {


        }
        else {

        }
        return Plans::save();
    }



}