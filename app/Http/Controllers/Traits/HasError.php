<?php

namespace App\Http\Controllers\Traits;

use Validator;
use Illuminate\Support\Facades\Redirect;

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

    public function makeSlug($title) {
        return preg_replace('/\s+/u', '-', trim($title));
    }

}
