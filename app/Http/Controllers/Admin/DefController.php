<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\department;
use Illuminate\Http\Request;

class DefController extends Controller
{
    public function index()
    {
        $result['data']=department::all();
        return view('admin/department',$result);
    }

    
    public function manage_Department(Request $request,$id='')
    {
        if($id>0){
            $arr=department::where(['id'=>$id])->get(); 

            $result['department']=$arr['0']->department;
             $result['def_slug']=$arr['0']->def_slug;
             $result['def_key']=$arr['0']->def_key;
             $result['def_url']=$arr['0']->def_url;
             $result['def_desc']=$arr['0']->def_desc;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;
        }else{
            $result['department']='';
            $result['def_key']='';
            $result['def_url']='';
              $result['def_desc']='';
             $result['def_slug']='';
            $result['status']='';
            $result['id']=0;
            
        }
        return view('admin/manage_Department',$result);
    }

    public function manage_Department_process(Request $request)
    {
        //return $request->post();
        
        $request->validate([
            'department'=>'required|unique:departments,department,'.$request->post('id'), 
            'def_slug'=>'required|unique:departments,def_slug,'.$request->post('id'),  

        ]);
        $request->session()->flash('message','alredy add');

        if($request->post('id')>0){
            $model=department::find($request->post('id'));
            $msg="department updated";
        }else{
            $model=new department();
            $msg="department inserted";
        }
        $model->department=$request->post('department');
        $model->def_slug=$request->post('def_slug');
        $model->def_key=$request->post('def_key');
        $model->def_url=$request->post('def_url');
        $model->def_desc=$request->post('def_desc');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/Department');
        
    }

    public function delete(Request $request,$id){
        $model=department::find($id);
        $model->delete();
        $request->session()->flash('message','department deleted');
        return redirect('admin/Department');
    }

    public function status(Request $request,$status,$id){
        $model=department::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','department status updated');
        return redirect('admin/Department');
    }
}
