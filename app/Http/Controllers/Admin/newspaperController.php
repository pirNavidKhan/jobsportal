<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\newspaper;
use Illuminate\Http\Request;

class newspaperController extends Controller
{
    public function index()
    {
        $result['data']=newspaper::all();
        return view('admin/newspaper',$result);
    }

    
    public function manage_tax(Request $request,$id='')
    {
        if($id>0){
            $arr=newspaper::where(['id'=>$id])->get(); 

            $result['newsp_desc']=$arr['0']->newsp_desc;
            $result['newsp_slug']=$arr['0']->newsp_slug;
             $result['newsp_keyword']=$arr['0']->newsp_keyword;
            $result['newsp_name']=$arr['0']->newsp_name;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;
        }else{
            $result['newsp_desc']='';
            $result['newsp_keyword']='';
            $result['newsp_slug']='';
            $result['newsp_name']='';
            $result['status']='';
            $result['id']=0;
            
        }
        return view('admin/manage_newspaper',$result);
    }

    public function manage_tax_process(Request $request)
    {
        //return $request->post();
        
        $request->validate([
            'newsp_slug'=>'required|unique:newspapers,newsp_slug,'.$request->post('id'),   
        ]);

        if($request->post('id')>0){
            $model=newspaper::find($request->post('id'));
            $msg="newspaper updated";
        }else{
            $model=new newspaper();
            $msg="newspaper inserted";
        }
        $model->newsp_desc=$request->post('newsp_desc');
        $model->newsp_keyword=$request->post('newsp_keyword');
         $model->newsp_slug=$request->post('newsp_slug');
        $model->newsp_name=$request->post('newsp_name');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/newspaper');
        
    }

    public function delete(Request $request,$id){
        $model=newspaper::find($id);
        $model->delete();
        $request->session()->flash('message','Tax deleted');
        return redirect('admin/newspaper');
    }

    public function status(Request $request,$status,$id){
        $model=newspaper::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','newspapaer status updated');
        return redirect('admin/newspaper');
    }
}
