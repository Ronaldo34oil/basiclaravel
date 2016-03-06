<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use Request;
use DB;
use App\model\User;
use Validator;
class BasicController extends Controller {

	//
	public function index()
	{
		//echo "IGOT7";
		return view("pages.index");
	}

	public function about_us()
	{
		return view("pages.about");
	}
	public function service()
	{
		return view("pages.service");
	}
	public function portfolio()
	{
		return view("pages.portfolio");
	}
	public function blog()
	{
		return view("pages.blog");
	}
	public function contact()
	{
		return view("pages.contact");
	}
	public function register()
	{
		return view("pages.register");
	}
public function register_submit()
	{
		//get value form 

		//echo Request::input('first_name');
		//echo '<pre>';
		//print_r(Request::all());
		//echo '</pre>';
		$message = [
			'required'  =>'กรุณากรอก :attribute ให้ครบ',
			'numeric' =>'กรุณากรอก :attribute เป็นตัวเลขเท่านั้น',
			'digits' =>'กรุณากรอก :attribute ต้องมี :digits หลัก'
		];
		$rules=[
			'first_name'			=>'required',
			'last_name'			=>'required',
			'email'				=>'required|unique:users',
			'tel'				=>'required|numeric|digits:10',
			'password'			=>'required',
			'password_confirmation' 	=>'required'

		];
		$validator = Validator::make(Request::all(),$rules,$message);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			
			$data_user = array(
					'firstname' =>Request::input('first_name'),
					'lastname' =>Request::input('last_name'),
					'tel' =>Request::input('tel'),
					'email' =>Request::input('email'),
					'password' =>Hash::make(Request::input('password'))
					
				);
			$insert_user=User::create($data_user);

			if($insert_user->exists())
			{
				//echo "Insert Success";
				return redirect('register')->with('status','<div class="alert  alert-success msgbox text-center">Insert Success</div>');

			}else {
				//echo "Insert Fail!!";
				return redirect('register')->with('status','<div class="alert alert-danger msgbox text-center">Insert Fail!!!!</div>');
			}
		}
	}
	public function customer_list(){
		//echo "<pre>";
		//print_r(DB::table('customer_list')->get(['customerName','postalcode']));
		//$data =DB::table('customers')
		//	->where('country','Thailand')
		//	->where('creditLimit','21000')
		//	->first();
		//	print_r($data);
		//echo "</pre>";
		$data = DB::table('customers')->paginate(20);
		$data_cnt= DB::table('customers')->count();
		return view('pages.customer_list')->with(array('data_customer'=>$data,'data_count'=>$data_cnt));

	}
	public function products_list(){
		//$data_product =DB::table('product')->get();
		//echo '<pre>';
		//print_r($data_product);
		//echo '</pre>';
		$data_product =DB::table('product')
				->join('category','product.category_id','=','category.category_id')
				->join('manufacturer','product.menufac_id','=','manufacturer.menufac_id')
				->select('*')
				->paginate(5);
		$data_cnt= DB::table('product')
				->join('category','product.category_id','=','category.category_id')
				->join('manufacturer','product.menufac_id','=','manufacturer.menufac_id')
				->select('*')
				->count();
				$count=0;
                       return view('pages.product_list')->with(array('data_product'=>$data_product,'data_cnt'=>$data_cnt,'count'=>$count));
	}
}
