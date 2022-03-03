<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserProfileModel;
use App\Models\UserTypeModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Cache;
use Session;
use DB;



class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Create page
    public function dashboard()
    {
        $data = [];
        try{
            $data['getData'] = DB::table('data_details')->get();
        }catch(\Throwable $errorThrown){}
        return view('home.home', $data);
    }

    //Save and Encrypt data
    public function save(Request $request)
    {
        $success = null;

        $this->validate($request,
        [
           'encryptData'   => ['required', 'string', 'min:2'],
        ]);
        try{
            $success = DB::table('data_details')->insert([
                'original' => trim($request['encryptData']),
                'encrypted' => Hash::make(Strip_tags(Strip_tags($request['encryptData']))),
                'date'    => date('Y-m-d'),
            ]);
        }catch(\Throwable $errorThrown){
            return redirect()->back()->with('error', 'Sorry, we are unable to encrypt your data now. Please try again. Thanks.');
        }
        return redirect()->back()->with('message', 'Your record was encrpted successfully.');
    }


    public function checkData($getOriginalData = null, $id = null)
    {
        $data = [];
        $getData =  DB::table('data_details')->where('id', $id)->first();
        if($getData &&  Hash::check(trim($getOriginalData), $getData->encrypted))
        {
            $data['message'] = "You entered the correct encrypted data. Note, the system uses HASH ALGORITHM.";
            $data['status'] = 1;
        }else{
            $data['message'] = "Sorry, that was not the information you encrypted. Please try again.";
            $data['status'] = 0;
        }
        return $data;
    }


     ################### SAVE CHANGE PASSWORD #########
     public function saveUpdatePasswordOnAuth(Request $request)
     {
         $this->validate($request,
          [
             'currentPassword'   => ['required', 'string', 'min:5'],
             'password'          => ['required', 'string', 'min:6', 'confirmed']
          ]);
         $isChanged = 0;
         try{
             $updateAccount = User::find($this->getUserID());
             //avoid user entering the same password
             if($updateAccount && Hash::check($request['password'], $updateAccount->password))
             {
                 return redirect()->route('changePassword')->with('error', 'Sorry, you cannot enter the same password as your current password!');
             }

             if($updateAccount && Hash::check($request['currentPassword'], $updateAccount->password))
             {
                 $updateAccount->password = Hash::make($request['password']);
                 $isChanged               =  $updateAccount->update();
                 if($isChanged)
                 {
                     return redirect()->route('changePassword')->with('message', 'Your password was changed successfully.');
                 }
             }else{
                 return redirect()->route('changePassword')->with('error', 'Sorry, your have entered wrong current password!');
             }

         }catch(\Throwable $errorThrown){
             $this->storeTryCatchError($errorThrown, 'ProfileController@saveUpdatePasswordOnAuth', 'Error occured on POST Request when try to update password.' );
         }
         return redirect()->route('changePassword')->with('error', 'Sorry, we could not change your password! Please try again.');
     }


}
