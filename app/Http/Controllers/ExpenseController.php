<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\expense;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExpenseController extends Controller
{
    public function create(){
        $categories = category::all();
        return view('expenses.create',['categories'=>$categories]);
    }
    public function store(Request $request, expense $expense){
        $this->validate($request,[
            'category_id'=>['required',Rule::exists('categories','id')],
            'name'=>['required'],
            'amount'=>['required','numeric'],
            'description'=>['required'],
            'expense_date'=>['required','date']
        ]);
        $expense->category_id = $request['category_id'];
        $expense->name = $request['name'];
        $expense->amount = $request['amount'];
        $expense->description = $request['description'];
        $expense->expense_date = $request['expense_date'];
        $expense->user_id =\auth()->id();
        $expense->save();
        return redirect()->to('/expenses');
    }
    public function index(){
        $expenses = expense::all();
        return view('expenses.index',['expenses'=>$expenses]);
    }
    public function edit(expense $expense){
        $categories = category::all();
        return view('expenses.edit',['expense'=>$expense,'categories'=>$categories]);
    }
    public function update(expense $expense){
        $attributes = request()->validate([
            'category_id'=>['required',Rule::exists('categories','id')],
            'name'=>['required'],
            'amount'=>['required','numeric'],
            'description'=>['required'],
            'expense_date'=>['required','date']
        ]);
        $expense->update($attributes);
        return redirect()->to('/expenses');
    }
    public function show(expense $expense){
        return view('expenses.show',['expense'=>$expense]);
    }
}
