<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\cuntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class CuntryController extends Controller
{
    public function index()
    {
        $result['data']=cuntry::all();
        return view('admin/cuntry',$result);
    }

    
    public function manage_cuntry(Request $request,$id='')
    {
        if($id>0){
            $arr=cuntry::where(['id'=>$id])->get(); 

            $result['cu_name']=$arr['0']->cu_name;
            $result['cu_key']=$arr['0']->cu_key;
            $result['cu_desc']=$arr['0']->cu_desc;
            $result['curncy']=$arr['0']->curncy;
            $result['image']=$arr['0']->image;
            $result['cu_slug']=$arr['0']->cu_slug;
            $result['is_home_selected']="";
            if($arr['0']->cu_slug==1){
                $result['is_home_selected']="checked";
            }
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;
        }else{
            $result['cu_name']='';
            $result['cu_key']='';
            $result['cu_desc']='';
            $result['curncy']='';
            $result['image']='';
            $result['cu_slug']="";
            $result['is_home_selected']="";
            $result['status']='';
            $result['id']=0;
            
        }
        return view('admin/manage_cuntry',$result);
    }

    public function manage_cuntry_process(Request $request)
    {
        //return $request->post();
        
        $request->validate([
           
        ]);

        if($request->post('id')>0){
            $model=cuntry::find($request->post('id'));
            $msg="cuntry updated";
        }else{
            $model=new cuntry();
            $msg="cuntry inserted";
        }

        if($request->hasfile('image')){

            if($request->post('id')>0){
                $arrImage=DB::table('cuntrys')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/cuntry/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/cuntry/'.$arrImage[0]->image);
                }
            }

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/cuntry',$image_name);
            $model->image=$image_name;
        }
       
        $model->cu_name=$request->post('cu_name');
        $model->cu_slug=$request->post('cu_slug');
        $model->cu_key=$request->post('cu_key');
        $model->cu_desc=$request->post('cu_desc');
        $model->curncy=$request->post('curncy');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/cuntry');
        
    }

    public function delete(Request $request,$id){
        $model=cuntry::find($id);
        $model->delete();
        $request->session()->flash('message','cuntry deleted');
        return redirect('admin/cuntry');
    }

    public function status(Request $request,$status,$id){
        $model=cuntry::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','cuntry status updated');
        return redirect('admin/cuntry');
    }
}
