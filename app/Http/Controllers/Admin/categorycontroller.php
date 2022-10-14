<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function index()
    {
        $result['data']=category::all();
        return view('admin/category',$result);
    }

    
    public function manage_category(Request $request,$id='')
    {
        if($id>0){
            $arr=category::where(['id'=>$id])->get(); 

            $result['cate_name']=$arr['0']->cate_name;
              $result['cate_desc']=$arr['0']->cate_desc;
              $result['cate_key']=$arr['0']->cate_key;
             $result['cate_slug']=$arr['0']->cate_slug;
             $result['salary']=$arr['0']->salary;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;
        }else{
            $result['cate_name']='';
            $result['cate_key']='';
            $result['cate_desc']='';
               $result['cate_slug']='';
            $result['salary']='';
            $result['status']='';
            $result['id']=0;
            
        }
        return view('admin/manage_category',$result);
    }

    public function manage_category_process(Request $request)
    {
        //return $request->post();
        
        $request->validate([
            'cate_slug'=>'required|unique:categories,cate_slug,'.$request->post('id'),
             'cate_name'=>'required'

        ]);

        if($request->post('id')>0){
            $model=category::find($request->post('id'));
            $msg="category updated";
        }else{
            $model=new category();
            $msg="category inserted";
        }
        $model->cate_name=$request->post('cate_name');
         $model->cate_key=$request->post('cate_key');
        $model->cate_slug=$request->post('cate_slug');
        $model->salary=$request->post('salary');
        $model->cate_desc=$request->post('cate_desc');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/category');
        
    }

   public function delete(Request $request,$id){
        $model=category::find($id);
        $model->delete();
        $request->session()->flash('message','category deleted');
        return redirect('admin/category');
    }

    public function status(Request $request,$status,$id){
        $model=category::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','category status updated');
        return redirect('admin/category');
    }
}
