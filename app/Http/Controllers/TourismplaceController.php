<?php

namespace App\Http\Controllers;

use App\Models\Tourismplace;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class TourismplaceController extends Controller
{
    public function get_tourismplace(){
        $tourism = Tourismplace::all();
        $response = array(
            'status' => 1,
            'message' => 'Success',
            'data' => $tourism
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    public function insert_tourismplace(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'name' => 'required|string|between:2,255',
            'location' => 'required|string|between:2,20',
            'imageAsset' => 'required|string|between:2,255',
            'listImage1' => 'required|string|between:2,255',
            'listImage2' => 'required|string|between:2,255',
            'listImage3' => 'required|string|between:2,255',
            'listImage4' => 'required|string|between:2,255',
            'deskripsi' => 'required|string|between:2,255',
            'jamBuka' => 'required|string|between:2,255',
            'tiket' => 'required|string|between:2,255',
            'waktu' => 'required|string|between:2,255',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $tourism = Tourismplace::create(
            $validator->validated()
        );
        $response = array(
            'status' => 1,
            'message' => 'Insert Success',
            'data' => $tourism
        );
        header('Content-Type: application/json');
         echo json_encode($response);
    }
    public function update_tourismplace(){

    }
}
