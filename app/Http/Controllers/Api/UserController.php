<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\Ethnic;
class UserController extends Controller
{
    //

    public function updateUser(Request $request)
    {


        $user = User::find($request->id);

        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->barcode = $request->barcode;
        $user->password = $request->password;
        $user->package_id = $request->package_id;
        $result = $user->update();
        if ($result) {
            return response()->json($user, 200);
        } else {
            return response()->json($user,404);

        }

    }

    public function updateUserProfile( Request $request){


        $profile = UserProfile::find($request->id);

        $profile->gender=$request->gender;
        $profile->age=$request->age;
        //$profile->ethnic_id=$request->ethnic_id;

        $profile->interests=$request->interests;
        $profile->user_id=$request->user_id;

        $result = $profile->update();

        $ethnics = [];
        foreach ($request->ethnic_id as $ethnic) {
            $ethnics[] = Ethnic::find($ethnic);
        }

        $profile->ethnics()->saveMany($ethnics);
        if ($result) {
            return response()->json($profile, 200);
        } else {
            return response()->json($profile,404);
        }
    }
}
