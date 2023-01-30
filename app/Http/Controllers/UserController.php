<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Orders()
    {

       $orders = DB::table('orders')
                        ->select('orders.*', 'users.name as userName', 'packages.package_name as packagePackage_name')
                        ->leftJoin('users', 'users.id' ,'orders.user_id' )
                        ->leftJoin('packages', 'packages.id', 'orders.package_id')
                        ->get();

                  return view('user.orders', ['orders' => $orders]);

                  //Insted of using user_id and package_id in the orderstable, fuction is calling to view relevent data in users and package tables.
    }

    public function Property()
    {

       $properties = DB::table('properties')
                        ->select('properties.*', 'users.name as userName','property_types.type as property_typeType', 'cities.name as cityName','packages.package_name as packagePackage_name','property_purposes.purpose as property_purposePurpose')
                        ->leftJoin('users', 'users.id' ,'properties.user_id' )
                        ->leftJoin('property_types', 'property_types.id' ,'properties.property_type_id' )
                        ->leftJoin('cities', 'cities.id' ,'properties.city_id' )
                        ->leftJoin('packages', 'packages.id', 'properties.listing_package_id')
                        ->leftJoin('property_purposes', 'property_purposes.id' ,'properties.property_purpose_id' )
                        ->get();

                  return view('user.properties', ['properties' => $properties]);

                          //Insted of using user_id , property_type_id, city_id, listing_package_id and package_id in the peoperties table, fuction is  calling to view relevent data in users ,cities, propert_purposes , property_type  and package tables.

    }

    public function Property_aminities()
    {

       $property_aminities = DB::table('property_aminities')
                        ->select('property_aminities.*', 'properties.title as propertieTitle', 'aminities.aminity as aminitiesAminity')
                        ->leftJoin('properties', 'properties.id' ,'property_aminities.property_id' )
                        ->leftJoin('aminities', 'aminities.id', 'property_aminities.aminity_id')
                        ->get();

                  return view('user.property_aminities', ['property_aminities' => $property_aminities]);

                  //Insted of using property_id and aminity_id in the property_aminitiestable, fuction is  calling to view relevent data in aminities and properties tables.

    }

    public function Users(){
        $users = DB::table('users')->get();

        return view('user.users', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
