<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Skills\store;
use App\models\Skill;
use Illuminate\Http\Request;

class SkillController extends DashboardController
{
    public function __construct(Skill $model)
    {
        parent::__construct($model);
    }//end of construct



    public function store(store $request)
    {

        Skill::create($request->all());
        return redirect()->route('skills.index');
    }//end of store



    public function update(store $request, Skill $skill)
    {

        $skill->update($request->all());
        return redirect()->route('skills.index');
    }//end of update
}
