<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function __construct (Survey $survey) {
    	$this->survey = $survey;
    }
    public function insert_survey(Request $rq) {
    	$survey = new Survey;
    	$survey->Name = $request->inpName;
    	$survey->Email = $request->inpEmail;
    	$survey->Telephone = $request->inpTele;
    	$survey->feedback = $request->inpFback;
    	$survey->save();
    }
}
