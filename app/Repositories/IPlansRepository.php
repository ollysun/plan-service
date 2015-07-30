<?php namespace Plans\Repositories;
/**
 * Created by PhpStorm.
 * User: Chitra J!
 * Date: 7/27/15
 * Time: 7:49 PM
 */

interface IPlansRepository {

    //public static function getAllPlans();

    public static function getPlansByPlatformProviderGeo($platform ,$iso3, $provider);

   // public static function createOrUpdate($id = null);
}