<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Events\CustomerEvent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers = Customers::query();

        if ($request->has('search')) {
            $customers = $customers->where('nic_no', '=', $request->search);
        }

        $customers = $customers->simplePaginate(15);

        return view('customer.index')
            ->withCustomers($customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->all();
            $customers = Customers::create($input);
            DB::commit();
            event(new CustomerEvent($customers));
            return back()->with('success', 'Customer created successfully!');
        } catch (\Exception $exception) {
            DB::rollback();
            return back()->withInput()->with('error', 'something went wrong please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Customers $customers
     * @return \Illuminate\Http\Response
     */
    public function show($customers)
    {
        $customerDetails = Customers::find($customers);
        return view('customer.show', compact('customerDetails'));
    }

    public function mailResend($id)
    {
        try {
            $customers = Customers::find($id);
            if ($customers->is_upload_doc == 0) {
                event(new CustomerEvent($customers));
                return back()->with('success', 'Send mail successfully!');
            } else {
                return back()->with('info', 'Document has been already submitted!');
            }

        } catch (\Exception $exception) {
            return back()->withInput()->with('error', 'something went wrong please try again.');
        }
    }

    public function downloadDocument($id)
    {
        return Storage::download('document/' . $id);
    }
}
