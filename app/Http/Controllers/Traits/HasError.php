<?php

namespace App\Http\Controllers\Traits;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
trait HasError {

    public static function getErrorMessage($input, $rules) {
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $message = implode("<br/>", $validator->messages()->all());
            session()->flash('message.alert', 'danger');
            session()->flash('message.content', $message);
            return Redirect::back();
        }
    }
     public static function getErrorMessageAjax($input, $rules) {
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return ([
                'status' => 401,
                'message' => $validator->errors()
            ]);
        }
    }

    public function slug($name, $extension) {

        $savename = $this->makeSlug($name);
        $rand = '-' . strtolower(Str::random(2));
        $nameslug = $savename . $rand . '.' . $extension;
        return $nameslug;
    }

    public function makeSlug($title) {
        return preg_replace('/\s+/u', '-', trim($title));
    }

}
