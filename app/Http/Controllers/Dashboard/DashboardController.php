<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\This;

class DashboardController extends Controller
{
    protected $model;
public function __construct(Model $model)
{
    $this->model=$model;
}//end of construct

    public function index()
    {

        $rows=$this->model;
        $rows=$this->filter($rows);
        $rows=$rows->paginate(10);
        return  view('Dashboard.'.$this->getClassNmeFromModel().'.index',compact('rows'));
    }//end of index

    public function create()
    {
        return view('Dashboard.'.$this->getClassNmeFromModel().'.create');
    }//end of create

    public function edit($id)
    {
        $row=$this->model->FindOrFail($id);
        return view('Dashboard.'.$this->getClassNmeFromModel().'.edit',compact('row'));
    }//end of edit

    public function destroy($id)
    {
        $this->model->findOrFail($id)->delete();
        return redirect()->route($this->getClassNmeFromModel().'.index');
    }//end of destroy

    protected function filter($rows){
    return $rows;
    }//end of filter

    protected function getClassNmeFromModel(){

    return Str::plural( strtolower(class_basename($this->model))) ;

    }//end of get name from class

}//end of controller
