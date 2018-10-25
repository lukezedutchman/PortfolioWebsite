<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('sales/sales_index');
    }

    public function schedule()
    {
        return view('sales/sales_schedule_appointment');
    }

    public function client()
    {
        return view('sales/sales_client_information');
    }

    public function create()
    {
        return view('sales/sales_create_client');
    }
}
