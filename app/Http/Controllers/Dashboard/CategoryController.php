<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\Categories\store;
use App\models\Category;
use Illuminate\Support\Facades\Hash;

class CategoryController extends DashboardController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }//end of construct



    public function store(store $request)
    {

        Category::create($request->all());
        return redirect()->route('categories.index');
    }//end of store



    public function update(store $request, Category $category)
    {

        $category->update($request->all());
        return redirect()->route('categories.index');
    }//end of update

}//end of controller
