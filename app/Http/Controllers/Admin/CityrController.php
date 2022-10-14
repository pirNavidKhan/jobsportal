<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class CityrController extends Controller
{
    public function index()
    {
        $result['data']=City::all();
        return view('admin/city',$result);
    }

    
    public function manage_city(Request $request,$id='')
    {
        if($id>0){
            $arr=City::where(['id'=>$id])->get(); 

            $result['city_name']=$arr['0']->city_name;
            $result['city_slug']=$arr['0']->city_slug;
            $result['c_desc']=$arr['0']->c_desc;
             $result['c_keyword']=$arr['0']->c_keyword;
            $result['parent_category_id']=$arr['0']->parent_category_id;
            $result['category_image']=$arr['0']->category_image;
            $result['is_home']=$arr['0']->is_home;
            $result['is_home_selected']="";
            if($arr['0']->is_home==1){
                $result['is_home_selected']="checked";
            }
            $result['id']=$arr['0']->id;

            $result['category']=DB::table('cities')->where(['status'=>1])->where('id','!=',$id)->get();
        }else{
            $result['city_name']='';
            $result['c_keyword']='';
            $result['city_slug']='';
            $result['c_desc']='';
            $result['parent_category_id']='';
            $result['category_image']='';
            $result['is_home']="";
            $result['is_home_selected']="";
            $result['id']=0;

            $result['category']=DB::table('cities')->where(['status'=>1])->get();
            
        }

        return view('admin/manage_city',$result);
    }

    public function manage_city_process(Request $request)
    {
        //return $request->post();
        
        $request->validate([
            'city_name'=>'required',
            'category_image'=>'mimes:jpeg,jpg,png',
            'city_slug'=>'required|unique:cities,city_slug,'.$request->post('id'),   
        ]);

        if($request->post('id')>0){
            $model=City::find($request->post('id'));
            $msg="City updated";
        }else{
            $model=new City();
            $msg="City inserted";
        }

        if($request->hasfile('category_image')){

            if($request->post('id')>0){
                $arrImage=DB::table('cities')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/category/'.$arrImage[0]->category_image)){
                    Storage::delete('/public/media/category/'.$arrImage[0]->category_image);
                }
            }

            $image=$request->file('category_image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/category',$image_name);
            $model->category_image=$image_name;
        }
        $model->city_name=$request->post('city_name');
         $model->c_keyword=$request->post('c_keyword');
        $model->city_slug=$request->post('city_slug');
        $model->c_desc=$request->post('c_desc');
        $model->parent_category_id=$request->post('parent_category_id');
        $model->is_home=0;
        if($request->post('is_home')!==null){
            $model->is_home=1;
        }
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/city');
        
    }

    public function delete(Request $request,$id){
        $model=cITY::find($id);
        $model->delete();
        $request->session()->flash('message','city deleted');
        return redirect('admin/city');
    }

    public function status(Request $request,$status,$id){
        $model=Category::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','city status updated');
        return redirect('admin/city');
    }

    

    
}
