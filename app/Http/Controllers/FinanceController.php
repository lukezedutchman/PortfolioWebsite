<?php

namespace App\Http\Controllers;

use App\Finance;
use Illuminate\Http\Request;


class FinanceController extends Controller
{
    public function index()
    {
        return view('finance/finance_index');
    }

    public function create()
    {
        return view('finance/finance_create_invoice');
    }

    public function overview()
    {
        return view('finance/finance_overview_invoices');
    }

    public function client()
    {
        $data = Data::all ();
        return view('finance/finance_information')->withData ( $data );
    }
}


