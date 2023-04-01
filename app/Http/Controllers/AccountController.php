<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected function index()
    {
        $account = Account::where('is_active',1)->get();

        if (!$account){
            return $this->commonResponse([],'account not found',);
        }
        return $this->commonResponse([
            'account '=> $account
        ],'',200);
    }

    protected function show(String $id){
        $account = Account::findOrFail($id);
        return $this->commonResponse($account);
    }

}
