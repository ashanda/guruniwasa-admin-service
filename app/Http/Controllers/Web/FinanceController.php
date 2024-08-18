<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function financeList()
    {
        try{

            return view('web.finance.list_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function financeDetailed()
    {
        try{

            return view('web.finance.detailed');

        }catch(\Exception $exception){

            return;
        }
    }


    public function financeSummery()
    {
        try{

            return view('web.finance.summery');

        }catch(\Exception $exception){

            return;
        }
    }



    public function taxPayments()
    {
        try{

            return view('web.finance.tax_payments');

        }catch(\Exception $exception){

            return;
        }
    }


    public function withHoldingTax()
    {
        try{

            return view('web.finance.with_holding_tax');

        }catch(\Exception $exception){

            return;
        }
    }



    public function withHoldingTaxView()
    {
        try{

            return view('web.finance.with_holding_tax_view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function incomeTax()
    {
        try{

            return view('web.finance.income_tax');

        }catch(\Exception $exception){

            return;
        }
    }
    public function incomeTaxView()
    {
        try{

            return view('web.finance.income_tax_view');

        }catch(\Exception $exception){

            return;
        }
    }




    public function mainCash()
    {
        try{

            return view('web.finance.main_cash');

        }catch(\Exception $exception){

            return;
        }
    }


    public function cashBalance()
    {
        try{

            return view('web.finance.cash_balance');

        }catch(\Exception $exception){

            return;
        }
    }

    public function depositCashBank()
    {
        try{

            return view('web.finance.deposit_cash_bank');

        }catch(\Exception $exception){

            return;
        }
    }

    public function bankCash()
    {
        try{

            return view('web.finance.bank_cash');

        }catch(\Exception $exception){

            return;
        }
    }


    public function pettyCash()
    {
        try{

            return view('web.finance.petty_cash');

        }catch(\Exception $exception){

            return;
        }
    }

    public function pettyCashSingle()
    {
        try{

            return view('web.finance.petty_cash_single');

        }catch(\Exception $exception){

            return;
        }
    }

   
    public function incomeExpenceCategory()
    {
        try{

            return view('web.finance.income_category');

        }catch(\Exception $exception){

            return;
        }
    }

    

}
