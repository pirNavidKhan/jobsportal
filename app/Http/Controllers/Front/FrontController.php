<?php
namespace App\Models\Admin;
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Product;
use App\Models\Admin\department;
use App\Models\Admin\City;
use App\Models\Admin\education;
use App\Models\Admin\newspaper;
use App\Models\Admin\Category;
use App\Models\Admin\cuntry;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $result['cuntry'] = cuntry::all();
        $result['data'] = Product::where('status', '1')->orderBy('created_at', 'desc')
            ->get();

        $result['education'] = education::all();
        $result['cuntry'] = cuntry::all();
        $result['city'] = City::all();
        $result['all_city'] = City::all();
        $newspaper = $result['newspaper'] = newspaper::all();
        $Category = $result['Category'] = Category::all();

        $result['defartment'] = DB::table('departments')->where(['status' => 1])
            ->orderBy('created_at', 'DESC')
            ->get();

        foreach ($result['defartment'] as $list)
        {
            DB::table('departments')->orderBy('created_at', 'DESC')
                ->where(['status' => 1])
                ->get();
        }

        $result['products'] = DB::table('products')->where(['status' => 1])
            ->orderBy('created_at', 'DESC')
            ->get();

        foreach ($result['products'] as $list)
        {
            DB::table('products')->orderBy('created_at', 'DESC')
                ->where(['status' => 1])
                ->get();
        }

        $result['home_categories'] = DB::table('cities')->where(['status' => 1])
            ->where(['is_home' => 1])
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('front.index', $result);
    }

    ////////city funtion/////////
    public function city(Request $request, $city_slug)
    {
        $result['cuntry'] = cuntry::all();
        $result['all_product'] = Product::latest()->get();
        $result['all_category'] = Category::latest()->get();
        $result['all_def'] = department::latest()->get();
        $test = city::get();

        $sub = city::where('parent_category_id', $test[0]->id)
            ->get();

        //dd($sub);
        $category = $result['data'] = City::all();
        $edu = $result['edu'] = education::all();
        $def = $result['def'] = department::all();

        $t = $result['product'] =

        DB::table('products')->leftJoin('cities', 'cities.id', '=', 'products.city_id')
            ->leftJoin('categories', 'categories.id', '=', 'products.cate_id')
            ->leftJoin('departments', 'departments.id', '=', 'products.department')
            ->leftJoin('educations', 'educations.id', '=', 'products.edu_id')
            ->where(['products.status' => 1])
            ->where(['cities.city_slug' => $city_slug])->get();
        foreach ($result['product'] as $list1)
        {
        }

        return view('front.city', $result, compact('sub'));
    }

    ////////////////category//////////////
    public function category(Request $request, $cate_slug)
    {
        $test= $result['all_product'] = Product::get();
        $result['cuntry'] = cuntry::where('id',$test[0]->cuntry_id)->get();
       

        $category = $result['data'] = City::all();
        $edu = $result['edu'] = education::all();
        $def = $result['def'] = department::all();

        $category_jobs = $result['product'] =

        DB::table('products')->leftJoin('cities', 'cities.id', '=', 'products.city_id')
            ->leftJoin('categories', 'categories.id', '=', 'products.cate_id')
            ->leftJoin('departments', 'departments.id', '=', 'products.department')
            ->leftJoin('educations', 'educations.id', '=', 'products.edu_id')
            ->where(['products.status' => 1])
            ->where(['categories.cate_slug' => $cate_slug])->get();
           
            
       

        return view('front.category', $result, compact('category', 'category_jobs'));

    }

    //////////Product funtion////////////////////
    public function product(Request $request, $slug)
    {
        $newspaper = newspaper::all();
        $result['defartment'] = department::all();
        $result['Category'] = Category::all();
        $result['cuntry'] = cuntry::all();
        $result['city'] = City::all();

        $product = $result['product'] = Product::where('slug', $slug)->get();

       

        $related_city = $result['related_product'] = DB::table('products')->where(['city_id' => $result['product'][0]
            ->city_id])
            ->get();

        $related_def_product = $result['related_def_product'] = DB::table('products')->where(['department' => $result['product'][0]
            ->department])
            ->get();

        $result['product_review'] = DB::table('product_review')->leftJoin('customers', 'customers.id', '=', 'product_review.customer_id')
            ->where(['product_review.products_id' => $result['product'][0]
            ->id])
            ->where(['product_review.status' => 1])
            ->orderBy('product_review.added_on', 'desc')
            ->select('product_review.rating', 'product_review.review', 'product_review.c_name', 'product_review.added_on', 'customers.name')
            ->get();

        //prx($result['product_review']);
        return view('front.product', $result, compact('product', 'related_city', 'newspaper'));
    }

    public function search(Request $request)
    {
        $result['cuntry'] = cuntry::all();
        $result['defartment'] = department::all();

       $product= $result['all_product'] = Product::where(['status'=>1])->orderBy('created_at')->get();

        $result['category'] = Category::where(['status'=>1])->orderBy('created_at')->get();

        $category_jobs = $result['product'] =

        DB::table('products')->leftJoin('cities', 'cities.id', '=', 'products.city_id')
            ->leftJoin('categories', 'categories.id', '=', 'products.cate_id')
            ->leftJoin('departments', 'departments.id', '=', 'products.department')
            ->leftJoin('educations', 'educations.id', '=', 'products.edu_id')
            ->leftJoin('newspapers', 'newspapers.id', '=', 'products.newspaper_id')
            ->leftJoin('cuntries', 'cuntries.id', '=', 'products.cuntry_id')

            ->where(['products.status' => 1]);

        

        if ($request->search)
        {
            $search = $category_jobs->where('name', 'LIKE', '%' . $request->search . '%')
                ->orwhere('desc', 'LIKE', '%' . $request->search . '%')
                ->orwhere('keywords', 'LIKE', '%' . $request->search . '%')
                ->orwhere('slug', 'LIKE', '%' . $request->search . '%')
                ->orwhere('cities.city_slug', 'LIKE', '%' . $request->search . '%')
                ->orwhere('cities.c_desc', 'LIKE', '%' . $request->search . '%')
                ->orwhere('cities.c_keyword', 'LIKE', '%' . $request->search . '%')
                ->orwhere('newspapers.newsp_name', 'LIKE', '%' . $request->search . '%')
                ->orwhere('newspapers.newsp_desc', 'LIKE', '%' . $request->search . '%')
                ->orwhere('newspapers.newsp_keyword', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('categories.cate_name', 'LIKE', '%' . $request->search . '%')
                  ->orwhere('categories.cate_desc', 'LIKE', '%' . $request->search . '%')
                  ->orwhere('categories.cate_key', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('educations.edu_name', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('educations.edu_desc', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('educations.edu_keyword', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('cuntries.cu_name', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('cuntries.cu_desc', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('departments.department', 'LIKE', '%' . $request->search . '%')
                 ->orwhere('departments.def_key', 'LIKE', '%' . $request->search . '%')
                ->get();
        }
        return view('front.search', $result, compact('search'));

    }

    public function registration(Request $request)
    {
        if ($request->session()
            ->has('FRONT_USER_LOGIN') != null)
        {
            return redirect('/');
        }

        $result = [];
        return view('front.registration', $result);
    }

    public function registration_process(Request $request)
    {
        $valid = Validator::make($request->all() , ["name" => 'required', "email" => 'required|email|unique:customers,email', "password" => 'required', "mobile" => 'required|numeric', ]);

        if (!$valid->passes())
        {
            return response()
                ->json(['status' => 'error', 'error' => $valid->errors()
                ->toArray() ]);
        }
        else
        {
            $arr = ["name" => $request->name, "email" => $request->email, "password" => $request->password, "mobile" => $request->mobile, "status" => 1, "created_at" => date('Y-m-d h:i:s') , "updated_at" => date('Y-m-d h:i:s') ];
            $query = DB::table('customers')->insert($arr);
            if ($query)
            {
                return response()->json(['status' => 'success', 'msg' => "Registration successfully continue to login"]);
            }

        }
    }

    public function login_process(Request $request)
    {

        $result = DB::table('customers')->where(['email' => $request
            ->str_login_email])
            ->get();

        if (isset($result[0]))
        {

            if ($request->str_login_password)
            {
                $request->session()
                    ->put('FRONT_USER_LOGIN', true);
                $request->session()
                    ->put('FRONT_USER_ID', $result[0]->id);
                $request->session()
                    ->put('FRONT_USER_NAME', $result[0]->name);
                $status = "success";
                $msg = "";
            }
            else
            {
                $status = "error";
                $msg = "Please enter valid password";
            }
        }
        else
        {
            $status = "error";
            $msg = "Please enter valid email id";
        }
        return response()->json(['status' => $status, 'msg' => $msg]);
        //$request->password
        
    }

    public function product_review_process(Request $request)
    {
        if ($request->session()
            ->has('FRONT_USER_LOGIN'))
        {
            $uid = $request->session()
                ->get('FRONT_USER_ID');

            $arr = ["rating" => $request->rating, "review" => $request->review, "products_id" => $request->product_id, "status" => 1, "customer_id" => $uid, "added_on" => date('Y-m-d h:i:s') ];
            $query = DB::table('product_review')->insert($arr);
            $status = "success";
            $msg = "Thank you for providing your review";
        }
        else
        {
            $status = "error";
            $msg = "Please login/signup to submit your review";
        }
        return response()->json(['status' => $status, 'msg' => $msg]);
    }

    public function defartment(Request $request, $def_slug)
    {
        $result['cuntry'] = cuntry::all();
        $result['newspaper'] = newspaper::all();
        $result['city'] = City::all();
        $result['education'] = education::all();
        $result['department'] = department::all();
        $result['Category'] = Category::all();

        $product = $result['product'] =

        DB::table('products')->leftJoin('departments', 'departments.id', '=', 'products.department')
            ->leftJoin('cities', 'cities.id', '=', 'products.city_id')
            ->leftJoin('categories', 'categories.id', '=', 'products.cate_id')
            ->leftJoin('educations', 'educations.id', '=', 'products.edu_id')
            ->where(['products.status' => 1])
            ->where(['departments.def_slug' => $def_slug])->get();

        return view('front.defartment', $result);

    }

    public function newspaper(Request $request, $newp_slug)
    {
        $result['cuntry'] = cuntry::all();
        $result['alljobs'] = Product::all();
        $result['City'] = City::all();
        $result['newspaper'] = newspaper::all();
        $result['Category'] = Category::all();
        $result['defartment'] = department::all();

        $product = $result['product'] =

        DB::table('products')->leftJoin('departments', 'departments.id', '=', 'products.department')
            ->leftJoin('cities', 'cities.id', '=', 'products.city_id')

            ->leftJoin('newspapers', 'newspapers.id', '=', 'products.newspaper_id')
            ->leftJoin('categories', 'categories.id', '=', 'products.cate_id')
            ->leftJoin('educations', 'educations.id', '=', 'products.edu_id')
            ->where(['products.status' => 1])
            ->where(['newspapers.newsp_slug' => $newp_slug])->get();
        foreach ($result['product'] as $list1)
        {
        }

        return view('front.newspaper', $result);

    }

    public function education(Request $request, $edu_slug)
    {
        $result['cuntry'] = cuntry::all();
        $result['alljobs'] = Product::all();
        $result['City'] = City::all();
        $result['newspaper'] = newspaper::all();
        $result['Category'] = Category::all();
        $result['defartment'] = department::all();

        $product = $result['product'] =

        DB::table('products')->leftJoin('departments', 'departments.id', '=', 'products.department')
            ->leftJoin('cities', 'cities.id', '=', 'products.city_id')

            ->leftJoin('newspapers', 'newspapers.id', '=', 'products.newspaper_id')
            ->leftJoin('categories', 'categories.id', '=', 'products.cate_id')
            ->leftJoin('educations', 'educations.id', '=', 'products.edu_id')
            ->where(['products.status' => 1])
            ->where(['educations.edu_slug' => $edu_slug])->get();

        return view('front.education', $result);
    }

    public function country($country_slug)
    {

     $cuntry=$result['cuntry'] = cuntry::all();
        $all_Category=$result['all_Category']= Category::all();
        $country_jobs = $result['product'] =

        DB::table('products')->leftJoin('departments', 'departments.id', '=', 'products.department')
            ->leftJoin('cities', 'cities.id', '=', 'products.city_id')

            ->leftJoin('newspapers', 'newspapers.id', '=', 'products.newspaper_id')
            ->leftJoin('categories', 'categories.id', '=', 'products.cate_id')
            ->leftJoin('educations', 'educations.id', '=', 'products.edu_id')
            ->leftJoin('cuntries', 'cuntries.id', '=', 'products.cuntry_id')
            ->where(['products.status' => 1])
            ->where(['cuntries.cu_slug' => $country_slug])->get();

        return view('front.country',compact('country_jobs','all_Category','cuntry'));
    }
}

