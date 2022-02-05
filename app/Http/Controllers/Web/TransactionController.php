<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::latest()
            ->paginate(10);

        return view('pages.admin.transaction.index', compact('transactions'));
    }
}
