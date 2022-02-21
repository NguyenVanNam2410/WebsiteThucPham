<?php
namespace App\Traits;
use Illuminate\Support\Facades\Log;
Trait AlertDelete
{
    public function AlertDelete2($id, $model)
    {
        try{
            $model->find($id)->delete();
            return response()->json([
                'code' =>200,
                'message' =>'success',
            ],200);
        }catch(\Exception $exception){
            Log::error('message'.$exception->getMessage().'line : '.$exception->getLine());
            return response()->json([
                'code' =>500,
                'message' =>'fail',
            ],500);
        }
    }
    public function AlertDelete3($id, $model,$model_2,$model_id)
    {
        try{
            $model->find($id)->delete();
            $model_2->where($model_id , $id)->delete();
            return response()->json([
                'code' =>200,
                'message' =>'success',
            ],200);
        }catch(\Exception $exception){
            Log::error('message'.$exception->getMessage().'line : '.$exception->getLine());
            return response()->json([
                'code' =>500,
                'message' =>'fail',
            ],500);
        }
    }
}









?>