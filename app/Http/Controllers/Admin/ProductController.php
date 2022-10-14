<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use App\Models\Admin\City;


class ProductController extends Controller
{
    public function index()
    {
        $result['data']=Product::paginate(20);
        return view('admin/product',$result);
    }

    
    public function manage_product(Request $request,$id='')
    {
        if($id>0){
            $arr=Product::where(['id'=>$id])->get(); 

            $result['city_id']=$arr['0']->city_id;
            $result['edu_id']=$arr['0']->edu_id;
            $result['cate_id']=$arr['0']->cate_id;
            $result['department']=$arr['0']->department;
            $result['newspaper_id']=$arr['0']->newspaper_id;
            $result['name']=$arr['0']->name;
            $result['image']=$arr['0']->image;
            $result['slug']=$arr['0']->slug;
            $result['model']=$arr['0']->model;
            $result['short_desc']=$arr['0']->short_desc;
            $result['desc']=$arr['0']->desc;
            $result['keywords']=$arr['0']->keywords;
            
            $result['uses']=$arr['0']->uses;
            $result['cuntry_id']=$arr['0']->cuntry_id;
            $result['lead_time']=$arr['0']->lead_time;
            $result['tax_id']=$arr['0']->tax_id;
            $result['is_promo']=$arr['0']->is_promo;
            $result['is_featured']=$arr['0']->is_featured;
            $result['is_discounted']=$arr['0']->is_discounted;
            $result['is_tranding']=$arr['0']->is_tranding;
            $result['status']=$arr['0']->status;
            $result['id']=$arr['0']->id;

            $result['productAttrArr']=DB::table('products_attr')->where(['products_id'=>$id])->get();

            $productImagesArr=DB::table('product_images')->where(['products_id'=>$id])->get();
            
            if(!isset($productImagesArr[0])){
                $result['productImagesArr']['0']['id']='';
                $result['productImagesArr']['0']['images']='';
            }else{
                $result['productImagesArr']=$productImagesArr;
            }
            //$result['productImagesArr']
        }else{
            $result['city_id']='';
            $result['edu_id']='';
            $result['cate_id']='';
            $result['department']='';
            $result['newspaper_id']='';
            $result['name']='';
            $result['slug']='';
            $result['image']='';
            $result['model']='';
            $result['short_desc']='';
            $result['desc']='';
            $result['keywords']='';
            $result['uses']='';
            $result['cuntry_id']='';
            $result['lead_time']='';
            $result['tax_id']='';
            $result['is_promo']='';
            $result['is_featured']='';
            $result['is_discounted']='';
            $result['is_tranding']='';
            $result['status']='';
            $result['id']=0;

            $result['productAttrArr'][0]['id']='';
            $result['productAttrArr'][0]['products_id']='';
            $result['productAttrArr'][0]['sku']='';
            $result['productAttrArr'][0]['attr_image']='';
            $result['productAttrArr'][0]['size_id']='';
            $result['productAttrArr'][0]['color_id']='';

            $result['productImagesArr']['0']['id']='';
            $result['productImagesArr']['0']['images']='';
            /*echo '<pre>';
            print_r( $result['productAttrArr']);
            die();*/
        }
        /*echo '<pre>';
        print_r( $result);
        die();*/
        $result['City']=DB::table('cities')->where(['status'=>1])->get();

        $result['category']=DB::table('categories')->where(['status'=>1])->get();
$result['education']=DB::table('educations')->where(['status'=>1])->get();
        $result['departments']=DB::table('departments')->where(['status'=>1])->get();

        $result['cuntry']=DB::table('cuntries')->where(['status'=>1])->get();

        $result['newspapers']=DB::table('newspapers')->where(['status'=>1])->get();
        return view('admin/manage_product',$result);
    }

    public function manage_product_process(Request $request)
    {
      
        //return $request->post();
        //echo '<pre>';
        //print_r($request->post());
        //die();
        if($request->post('id')>0){
            $image_validation="mimes:jpeg,jpg,png";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png";
        }
        $request->validate([
            'name'=>'required',
            'image'=>$image_validation,
            'slug'=>'required|unique:products,slug,'.$request->post('id'), 
            'attr_image.*' =>'mimes:jpg,jpeg,png',
            'images.*' =>'mimes:jpg,jpeg,png'   
        ]);

        $paidArr=$request->post('paid'); 
        $qtyArr=$request->post('qty'); 
        $size_idArr=$request->post('size_id'); 
        $color_idArr=$request->post('color_id'); 
       
        if($request->post('id')>0){
            $model=Product::find($request->post('id'));
            $msg="Product updated";
        }else{
            $model=new Product();
            $msg="Product inserted";
        }

        if($request->hasfile('image')){
            if($request->post('id')>0){                
                $arrImage=DB::table('products')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/'.$arrImage[0]->image);
                }
            }
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }

        $model->city_id=$request->post('city_id');
         $model->edu_id=$request->post('edu_id');
          $model->cate_id=$request->post('cate_id');
        $model->newspaper_id=$request->post('newspaper_id');
        $model->department=$request->post('department');
        $model->name=$request->post('name');
        $model->slug=$request->post('slug');
        $model->model=$request->post('model');
        $model->short_desc=$request->post('short_desc');
        $model->desc=$request->post('desc');
        $model->keywords=$request->post('keywords');
        $model->uses=$request->post('uses');
        $model->cuntry_id=$request->post('cuntry_id');
        $model->lead_time=$request->post('lead_time');
        $model->tax_id=$request->post('tax_id');
        $model->is_promo=$request->post('is_promo');
        $model->is_featured=$request->post('is_featured');
        $model->is_discounted=$request->post('is_discounted');
        $model->is_tranding=$request->post('is_tranding');
        $model->status=1;
        $model->save();
        $pid=$model->id;
        /*Product Attr Start*/ 
       
        
        /*Product Images End*/

        $request->session()->flash('message',$msg);
        return redirect('admin/product');
        
    }

    public function delete(Request $request,$id){
        $model=Product::find($id);
        $model->delete();
        $request->session()->flash('message','Product deleted');
        return redirect('admin/product');
    }

    public function product_attr_delete(Request $request,$paid,$pid){
        $arrImage=DB::table('products_attr')->where(['id'=>$paid])->get();
        if(Storage::exists('/public/media/'.$arrImage[0]->attr_image)){
            Storage::delete('/public/media/'.$arrImage[0]->attr_image);
        }
        DB::table('products_attr')->where(['id'=>$paid])->delete();
        return redirect('admin/product/manage_product/'.$pid);
    }

    public function product_images_delete(Request $request,$paid,$pid){
        $arrImage=DB::table('product_images')->where(['id'=>$paid])->get();
        if(Storage::exists('/public/media/'.$arrImage[0]->images)){
            Storage::delete('/public/media/'.$arrImage[0]->images);
        }
        DB::table('product_images')->where(['id'=>$paid])->delete();
        return redirect('admin/product/manage_product/'.$pid);
    }
    
    public function status(Request $request,$status,$id){
        $model=Product::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Product status updated');
        return redirect('admin/product');
    }
}
