<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Session;

class SiteController extends Controller
{
    public function getHome(){
    	return view('welcome');
    }

    public function postAddRecord(Request $request){
    	$fullname = $request->input('fullname');
		$province = $request->input('province');
		$district = $request->input('district');
		$minicipality = $request->input('minicipality');
		$wardno = $request->input('wardno');
		$tole = $request->input('tole');
		$age = $request->input('age');
		$gender = $request->input('gender');
		$type = $request->input('type');
		$identycardoption = $request->input('identycardoption');
		$identycardno = $request->input('identycardno');
		$cityzenshipoption = $request->input('cityzenshipoption');
		$cityzenshipno = $request->input('cityzenshipno');
		$familyno = $request->input('familyno');
		$otherdisableinfamilyoption = $request->input('otherdisableinfamilyoption');
		$otherdisableinfamilyno = $request->input('otherdisableinfamilyno');
		$gname = $request->input('gname');
		$relation = $request->input('relation');
		$contactnumber = $request->input('contactnumber');
		$education = $request->input('education');
		$trainingoption = $request->input('trainingoption');
		$whattraining = $request->input('whattraining');
		$wheretraining = $request->input('wheretraining');
		$businessoption = $request->input('businessoption');
		$whatbusiness = $request->input('whatbusiness');
		$effectonbusiness = $request->input('effectonbusiness');
		$businessstatus = $request->input('businessstatus');
		$remark = $request->input('remark');
		$possiable = $request->input('possiable');
		$email = $request->input('email');
		$fbid = $request->input('fbid');
		$possiable=$request->input('possiable');
		$photo = $request->file('photo');
		$idcard =$request->input('idcard');
    

//for photo 
		if($photo){
        $getuniquename = sha1($photo->getClientOriginalName().time());
        $getextension = $photo->getClientOriginalExtension();
        $getrealname = $getuniquename.'.'.$getextension;
        $photo->move('site/img',$getrealname);
    	}
    	else{
    		$getrealname = null;
    	}


    	$record = New Record;
    	$record->fullname = $fullname;
    	$record->province = $province;
		$record->district = $district;
		$record->minicipality = $minicipality;
		$record->wardno = $wardno;
		$record->tole = $tole;
		$record->age = $age;
		$record->gender = $gender;
		$record->type = $type;
		$record->identycardoption = $identycardoption;
		$record->identycardno = $identycardno;
		$record->cityzenshipoption = $cityzenshipoption;
		$record->cityzenshipno = $cityzenshipno;
		$record->familyno = $familyno;
		$record->otherdisableinfamilyoption = $otherdisableinfamilyoption;
		$record->otherdisableinfamilyno = $otherdisableinfamilyno;
		$record->gname = $gname;
		$record->relation = $relation;
		$record->contactnumber = $contactnumber;
		$record->education = $education;
		$record->trainingoption = $trainingoption;
		$record->whattraining = $whattraining;
		$record->wheretraining = $wheretraining;
		$record->businessoption = $businessoption;
		$record->whatbusiness = $whatbusiness;
		$record->effectonbusiness = $effectonbusiness;
		$record->businessstatus = $businessstatus;
		$record->remark = $remark;
		$record->possiable = $possiable;
		$record->fbid = $fbid;
		$record->email = $email;
		$record->photo = $getrealname;
		$record->idcard=$idcard;
		
		$record->save();
		return redirect()->back()->with('message', 'Thank you for your information');


    }
    public function getLanguage($language){
    	if($language == 'en'){
    			Session::put('language', 'en');
    	}
    	else{
    		Session::put('language', 'np');
    	}
    	return redirect()->back(); 
    }
}
