<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CustomerDocumentsRequest;

class CustomerDocumentsController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Customers $customers
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerDocumentsRequest $request, $ref_id)
    {
        $customers=Customers::where(['reference' => $ref_id])->first();
        if($customers->is_upload_doc==1){
            return back()->with('warning','Sorry,You have been alrady file uploaded!');
        }
        DB::beginTransaction();
        try {
            $document_path_one = $request->file('document_one')->store('document');
            $document_path_two = $request->file('document_two')->store('document');
            $document_path_three = $request->file('document_three')->store('document');
            $customers->document_one=$document_path_one;
            $customers->document_two=$document_path_two;
            $customers->document_three=$document_path_three;
            $customers->is_upload_doc='1';
            $customers->save();
            DB::commit();
            return back()->with('success','Document Upload successfully!');
        } catch (\Exception $exception) {
            DB::rollback();
            return back()->withInput()->with('error', 'something went wrong please try again.');
        }
    }


}
