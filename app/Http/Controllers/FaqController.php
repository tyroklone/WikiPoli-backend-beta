<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FaqController extends Controller
{

    public function validateRequest(Request $request)
    {
     $faqs = [
        'title' => 'required|string',
        'content' => 'required|string',
       ];
       
     $this->validate($request, $faqs);
    }

    public function index()
    {
     // Get all faqs
     $faqs = Faq::all();
     
     if($faqs)
     {
      $res['status'] = true;
      $res['status_code'] = 200;
      $res['message'] = 'Frequently Asked Questions';
      $res['faqs'] = $faqs;
      
      return response()->json($res, $res['status_code']);
     }
      else
     {
      $res['status']  = false;
      $res['status_code'] = 404;
      $res['message'] = 'No FAQ Found!';
      
      return response()->json($res, $res['status_code']);
     }
    }

    public function store(Request $request)
    {
     try {
          $this->validateRequest($request);
        
          DB::beginTransaction();
     
          $title = $request->input('title');
          $content = $request->input('content');
          $faqs = Faq::create([
            'title' => $title,
            'content' => $content,
          ]);
       
         $res['status']  = true;
         $res['status_code'] = 200;
         $res['message'] = 'FAQ Created Successfully!';
         $res['faqs'] = $faqs;
     
         DB::commit();
         return response()->json($res, $res['status_code']);
        }
         catch (\Exception $e)
        {
         DB::rollBack();
         
         $res['status']  = false;
         $res['status_code'] = 501;
         $res['message'] = 'Unable To Create Your FAQ!';
         $res['error'] = $e->getMessage();
         
         return response()->json($res, $res['status_code']);
        }
    }



    public function update(Request $request, Faq $faq, $id)
    {
     try {
          $this->validateRequest($request);
     
          DB::beginTransaction();
          $faq = Faq::where('id', $id)->first();
          if($faq)
          {
           $faq->title = $request->input('title');
           $faq->content = $request->input('content');
           $faq->save();
   
           $res['status_code'] = 200;
           $res['message'] = 'FAQ Updated Succesfully!';
           $res['faq'] = $faq;
           
           DB::commit();
           return response()->json($res, $res['status_code']);
          }
         }
          catch (\Exception $e)
         {
          DB::rollBack();
          
          $res['status_code'] = 404;
          $res['message'] = 'Unable To Update FAQ!';
          $res['error'] = $e->getMessage();
          
          return response()->json($res, $res['status_code']);
         }
        
    }

    public function show($id)
    {
     try {
          $faq = Faq::where('id', $id)->first();
          if(!$faq)
          {
           $res['status'] = true;
           $res['status_code'] = 200;
           $res['message'] = 'FAQ Found!';
           $res['faq'] = $faq;
           
           return response()->json($res, $res['status_code']);  
          }
           else
          {
           $res['status']  = false;
           $res['status_code'] = 404;
           $res['message'] = 'FAQ Not Found!';
           
           return response()->json($res, $res['status_code']);
          }
         }
          catch (\Exception $e)
         {
          $res['status_code'] = 501;
          $res['message'] = 'An Unexpected Error Occured!';
          $res['error'] = $e->getMessage();
          
          return response()->json($res, $res['status_code']);
         }
        
    }




    public function destroy($id)
    {
     try {
          $faq = Faq::where('id', $id)->first();
          
          if($faq)
          {
           // Delete the faq
           $faq->delete();
           
           $res['status'] = true;
           $res['status_code'] = 200;
           $res['message'] = "FAQ Was Deleted Successfully!";
           
           return response()->json($res, 200);
          }
           else
          {
           $res['status']  = false;
           $res['status_code'] = 404;
           $res['message'] = 'FAQ ID Not Found!';
           
           return response()->json($res, $res['status_code']);
          }
         }
          catch (\Exception $e)
         {
          $res['status_code'] = 501;
          $res['message'] = 'An Unexpected Error Occured!';
          $res['error'] = $e->getMessage();
          
          return response()->json($res, $res['status_code']);
         }
}
