<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Requests\Dashboard\Pages\store;
use App\models\Page;
use Illuminate\Http\Request;

class PageController extends DashboardController
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }//end of construct



    public function store(store $request)
    {

        Page::create($request->all());
        return redirect()->route('pages.index');
    }//end of store



    public function update(store $request, Page $page)
    {

        $page->update($request->all());
        return redirect()->route('pages.index');
    }//end of update
}//end of controller
