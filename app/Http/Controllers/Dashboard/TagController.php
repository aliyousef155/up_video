<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Tags\store;
use App\models\Tag;
use Illuminate\Http\Request;

class TagController extends DashboardController
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }//end of construct



    public function store(store $request)
    {

        Tag::create($request->all());
        return redirect()->route('tags.index');
    }//end of store



    public function update(store $request, Tag $tag)
    {

        $tag->update($request->all());
        return redirect()->route('tags.index');
    }//end of update
}
