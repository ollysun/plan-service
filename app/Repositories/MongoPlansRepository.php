<?php namespace Plans\Repositories;



class MongoPlansRepository implements IPlansRepository
{

    public static function getPlansByPlatformProviderGeo($platform ,$iso3, $provider){

       // $allPlans =  mongo query
        $allPlans='';
        //Inject Mapper
        return $allPlans;
    }

    public function getPlanById($id)
    {

    }

    public function createOrUpdate($id = null)
    {
        if(is_null($id)) {


        }
        else {

        }

    }

}