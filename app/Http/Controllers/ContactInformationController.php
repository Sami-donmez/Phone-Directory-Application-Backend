<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactInformationRequest;
use App\Http\Requests\UpdateContactInformationRequest;
use App\Models\ContactInformation;

class ContactInformationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactInformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactInformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function show(ContactInformation $contactInformation)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactInformation $contactInformation)
    {
        if ($contactInformation->delete()) {
            return response()->json([
                'message'=>'Contact Information deleted',
            ]);
        }else{
            return response()->json([
                'message'=>'Contact Information delete error',
            ]);
        }
    }
}
