<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBloodDonationRequest;
use App\Models\BloodDonation;
use Illuminate\Http\Request;

class bloodDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BloodDonation::all();
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBloodDonationRequest $request)
    {
        $request->validated($request->all());

        $bloodDonation = BloodDonation::create([
            'fullName' => $request->fullName,
            'address' => $request->address,
            'contact' => $request->contact,
            'bloodType' => $request->bloodType,
            'status' => $request->status,
            'period' => $request->period,
            'category' => $request->category,
        ]);

        return ($bloodDonation);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $bloodDonation = BloodDonation::where('id', $request->id)
            ->orWhere('fullName', $request->fullName)
            ->orWhere('category', $request->category)
            ->get();
            
        return $bloodDonation;
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodDonation $bloodDonation)
    {
        $bloodDonation->update($request->all());

        return ($bloodDonation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodDonation $bloodDonation)
    {
        $bloodDonation->delete();

        return response('The selected record was deleted.', 201);
    }
}
