<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
class Educationcontroller extends Controller
{
    public function index()
    {
        $result['data']=education::all();
        return view('admin/jobs_education',$result);
    }

    
    public function manage_education(Request $request,$id='')
    {
        if($id>0){
            $arr=education::where(['id'=>$id])->get();
             $result['edu_desc']=$arr['0']->edu_desc;
            $result['edu_slug']=$arr['0']->edu_slug;
            $result['edu_keyword']=$arr['0']->edu_keyword;
             $result['edu_name']=$arr['0']->edu_name;
            $result['id']=$arr['0']->id;
        }else{
            $result['image']='';
            $result['edu_desc']='';
            $result['edu_slug']='';
            $result['edu_keyword']='';
             $result['edu_name']='';
            $result['id']="";
        }

        return view('admin/manage_education',$result);
    }

    public function manage_education_process(Request $request)
    {
        $request->validate([

        ]);

        if($request->post('id')>0){
            $model=education::find($request->post('id'));
            $msg="Education updated";
        }else{
            $model=new education();
            $msg="Education inserted";
        }

        
        $model->edu_desc=$request->post('edu_desc');
        $model->edu_slug=$request->post('edu_slug');
        $model->edu_keyword=$request->post('edu_keyword');
        $model->edu_name=$request->post('edu_name');
      
        $model->status=1;

        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/jobs_education');
        
    }

    public function delete(Request $request,$id){
        $model=education::find($id);
        $model->delete();
        $request->session()->flash('message','Education deleted');
        return redirect('admin/jobs_education');
    }

    public function status(Request $request,$status,$id){
        $model=education::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Education status updated');
        return redirect('admin/jobs_education');
    }
    
}
