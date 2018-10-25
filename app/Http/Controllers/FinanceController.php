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
}
