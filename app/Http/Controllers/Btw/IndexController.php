<?php
/**
 * 宝通
 * */
namespace App\Http\Controllers\Btw;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Btw;

class IndexController extends Controller
{
    protected $model_user;
    public function __construct(Btw $user)
    {
        $this->model_user = $user;
    }
    //首页
    public function index(Request $request)
    {
        $data = Btw::take(20)->orderBy('id','DESC')->get();
//        print_r($data[0]->user_name);
        return view('btw/index',['data'=>$data]);
    }
}
