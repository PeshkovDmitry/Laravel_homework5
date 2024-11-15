<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index() {
        return view('form');
    }

    public function store(Request $request) {

        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $position = $request->input('position');
        $email = $request->input('email');
        $workData = $request->input('workData');

        $data = json_decode($workData);
        $street = $data->address->street;
        $lat = $data->address->geo->lat; 

        echo $name . ' ' . $lastname . ' ' . $position . ' ' . $email;
        echo "<br>";
        echo $street;
        echo "<br>";
        echo $lat;
        echo "<br>";
        echo $this->getPath($request);
        echo "<br>";
        echo $this->getUrl($request);

    }

    public function update(Request $request, $id) {
        echo  "id = " . $id . ", но я так и не понял, что с ним по заданию необходимо делать";
    }

    private function getPath(request $request) {
        return $request->path();
    }

    private function getUrl(Request $request) {
        return $request->url();
    }

}
