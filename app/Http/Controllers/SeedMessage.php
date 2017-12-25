<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use DB;

class SeedMessage extends Controller
{
     /**
     * create a new Form example
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request){

        $data = new Form;
        // insert new data to database
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->question = $request->question;
        $data->save();
        // success back page
        return redirect('contact-us')->with('message', 'Message sent!');;
    }
}