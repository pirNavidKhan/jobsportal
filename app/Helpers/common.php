<?php
use Illuminate\Support\Facades\DB;

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();
}

function getTopNavCat(){
    $result=DB::table('cities')
            ->where(['status'=>1])
            ->get();
            $arr=[];
    foreach($result as $row){
        $arr[$row->id]['city_name']=$row->city_name;
        $arr[$row->id]['parent_id']=$row->parent_category_id;
		$arr[$row->id]['city_slug']=$row->city_slug;
    }
    $str=buildTreeView($arr,0);
    return $str;
}

$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($arr as $id=>$data){
		if($parent==$data['parent_id']){
			if($level>$prelevel){
				if($html==''){
					$html.='<ul class="nav navbar-nav">';
				}else{
					$html.='<ul class="dropdown-menu">';
				}
				
			}
			if($level==$prelevel){
				$html.='</li>';
			}
			$url=url("/category/".$data['city_slug']);
			$html.='<li><a href="'.$url.'">'.$data['city_name'].'<span class="caret"></span></a>';
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</li></ul>';
	}
	return $html;
}

function getUserTempId(){
	if(session()->get('USER_TEMP_ID')===null){
		$rand=rand(111111111,999999999);
		session()->put('USER_TEMP_ID',$rand);
		return $rand;
	}else{
		return session()->has('USER_TEMP_ID');
	}
}

function getAddToCartTotalItem(){
	if(session()->has('FRONT_USER_LOGIN')){
		$uid=session()->get('FRONT_USER_LOGIN');
		$user_type="Reg";
	}else{
		$uid=getUserTempId();
		$user_type="Not-Reg";
	}
	$result=DB::table('cart')
            ->leftJoin('products','products.id','=','cart.product_id')
            ->leftJoin('products_attr','products_attr.id','=','cart.product_attr_id')
            ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
            ->leftJoin('colors','colors.id','=','products_attr.color_id')
            ->where(['user_id'=>$uid])
            ->where(['user_type'=>$user_type])
            ->select('cart.qty','products.name','products.image','sizes.size','colors.color','products_attr.price','products.slug','products.id as pid','products_attr.id as attr_id')
            ->get();

	return $result;
   
}
function getCustomDate($date){
    if($date!=''){
        $date=strtotime($date);
        return date('d-M Y',$date);
    }
    }

?>