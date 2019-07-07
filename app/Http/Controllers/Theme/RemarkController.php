<?php

namespace App\Http\Controllers\theme;

use App\Model\Remark;
use App\Model\RemarkAttribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RemarkController extends Controller
{
    public function index(){
    	return view('theme/index');
    }
    public function store(Request $request){
    	
    	$data = new Remark;
    	$data->user_name = $request->user_name;
    	$data->point = $request->point;
    	$data->description = $request->description;
    	$data->save();

    	$attr = new RemarkAttribute;
    	$attr->remark_id = $data->id;
    	$attr->attribute_id = 1;
    	$attr->point = $request->attrPoint1;
    	$attr->description = $request->attrRemark1;
    	$attr->save();

    	$attr = new RemarkAttribute;
    	$attr->remark_id = $data->id;
    	$attr->attribute_id = 2;
    	$attr->point = $request->attrPoint2;
    	$attr->description = $request->attrRemark2;
    	$attr->save();

    	$attr = new RemarkAttribute;
    	$attr->remark_id = $data->id;
    	$attr->attribute_id = 3;
    	$attr->point = $request->attrPoint3;
    	$attr->description = $request->attrRemark3;
    	$attr->save();

    	$attr = new RemarkAttribute;
    	$attr->remark_id = $data->id;
    	$attr->attribute_id = 4;
    	$attr->point = $request->attrPoint4;
    	$attr->description = $request->attrRemark4;
    	$attr->save();

    	$attr = new RemarkAttribute;
    	$attr->remark_id = $data->id;
    	$attr->attribute_id = 5;
    	$attr->point = $request->attrPoint5;
    	$attr->description = $request->attrRemark5;
    	$attr->save();

    	$response = array(
            'status' => 'success',
            'msg' => 'success'
        );
        return response()->json($response);
    }
}
