<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function Calculate (Request $request){

        $numberOne = $request->numberOne;
        $numberTwo = $request->numberTwo;
        $action = $request->action;

        if (is_numeric($numberOne)) {
            $number = $numberOne + 0;

            if($action == "plus") {
                return $numberOne + $numberTwo;
            }

            elseif($action == "minus") {
                return $numberOne - $numberTwo;
            }

            elseif($action == "devide") {
                return $numberOne / $numberTwo;
            }

            elseif($action == "multiply") {
                return $numberOne * $numberTwo;
            }
            else {
                echo "Make sure to use actions: plus, minus, devide, multiply";
            }
        }
        else {
            echo 'variables $numberOne and $numberTwo must be numbers';
        }

    }
}
