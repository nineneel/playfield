<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view("signup");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'gender' => 'required',
            'birthdate' => 'required',
            'password' => 'required|min:6|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'user';

        $new_user = User::create([
            'name' => $validatedData['name'],
            'password' => $validatedData['password'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
        ]);

        DetailUser::create([
            'user_id' => $new_user->id,
            'gender' => $validatedData['gender'],
            'birthdate' => $validatedData['birthdate']
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        Auth::attempt($credentials);
        $request->session()->regenerate();

        return redirect()->route('upload_photo_view')->with('user_id', $new_user['id']);
    }

    public function sign_up_1(Request $request)
    {
        DetailUser::create([
            'user_id' => $request->user_id,
            'gender' => $request['gender'],
            'birthdate' => $request['birthdate'],
            'image' => $request->avatar,
        ]);

        return redirect()->route('sign_up_step_2_view')->with('user_id', $request->user_id);
    }

    public function sign_up_1_view()
    {
        return view("signup.google");
    }

    public function sign_up_2_view()
    {
        $items = array(
            [
                'name' => "Drawing",
                "image" => "/img/signup/drawing.png"
            ],
            [
                'name' => "Painting",
                "image" => "/img/signup/painting.png"
            ],
            [
                'name' => "Reading",
                "image" => "/img/signup/reading.png"
            ],
            [
                'name' => "Puzzle",
                "image" => "/img/signup/puzzle.png"
            ],
            [
                'name' => "Coloring",
                "image" => "/img/signup/coloring.png"
            ],
            [
                'name' => "Sports",
                "image" => "/img/signup/sports.png"
            ],
            [
                'name' => "Watching",
                "image" => "/img/signup/tv.png"
            ],
            [
                'name' => "Dancing",
                "image" => "/img/signup/dancing.png"
            ],
            [
                'name' => "Cooking",
                "image" => "/img/signup/cooking.png"
            ],
        );

        return view("signup.step2", [
            'items' => $items
        ]);
    }

    public function sign_up_3_view()
    {
        $items = array(
            [
                'name' => "Vegetables",
                "image" => "/img/signup/vegs.png"
            ],
            [
                'name' => "Darkness",
                "image" => "/img/signup/darkness.png"
            ],
            [
                'name' => "Thunder",
                "image" => "/img/signup/dirty.png"
            ],
            [
                'name' => "Bugs",
                "image" => "/img/signup/bugs.png"
            ],
            [
                'name' => "Cleaning",
                "image" => "/img/signup/cleaning.png"
            ],
            [
                'name' => "Sports",
                "image" => "/img/signup/sports.png"
            ],
            [
                'name' => "Medicine",
                "image" => "/img/signup/thunder.png"
            ],
            [
                'name' => "Sleeping",
                "image" => "/img/signup/vegs.png"
            ],
            [
                'name' => "Being Dirty",
                "image" => "/img/signup/dirty.png"
            ],
        );

        return view("signup.step3", [
            'items' => $items
        ]);
    }

    public function sign_up_4_view()
    {
        $items = array(
            [
                'name' => "Milk",
                "image" => "/img/signup/milk.png"
            ],
            [
                'name' => "Egg",
                "image" => "/img/signup/egg.png"
            ],
            [
                'name' => "Peanut",
                "image" => "/img/signup/peanut.png"
            ],
            [
                'name' => "Soy",
                "image" => "/img/signup/soy.png"
            ],
            [
                'name' => "Wheat",
                "image" => "/img/signup/wheat.png"
            ],
            [
                'name' => "Tree Nut",
                "image" => "/img/signup/tree nut.png"
            ],
            [
                'name' => "Shellfish",
                "image" => "/img/signup/shellfish.png"
            ],
            [
                'name' => "Fish",
                "image" => "/img/signup/fish.png"
            ],
            [
                'name' => "Sesame",
                "image" => "/img/signup/sesame.png"
            ],
        );

        return view("signup.step4", [
            'items' => $items
        ]);
    }

    public function upload_photo_view()
    {
        return view("signup.step5");
    }

    public function sign_up_5_view()
    {
        return view("signup.step6");
    }

    public function sign_up_2(Request $request)
    {
        $likes = "-";
        if ($request->likes) {
            if (count($request->likes) == 1) {
                $likes = $request->likes[0];
            } else {
                $likes = implode(", ", $request->likes);
            }

            $likes = ucwords($likes);
        }

        DetailUser::where('user_id', $request->user_id)->update([
            'likes' => $likes,
        ]);

        return redirect()->route("sign_up_step_3_view")->with('user_id', $request->user_id);
    }

    public function sign_up_3(Request $request)
    {
        $dislikes = "-";
        if ($request->dislikes) {
            if (count($request->dislikes) == 1) {
                $dislikes = $request->dislikes[0];
            } else {
                $dislikes = implode(", ", $request->dislikes);
            }
            $dislikes = ucwords($dislikes);
        }


        DetailUser::where('user_id', $request->user_id)->update([
            'dislikes' => $dislikes,
        ]);

        return redirect()->route("sign_up_step_4_view")->with('user_id', $request->user_id);
    }

    public function sign_up_4(Request $request)
    {
        $allergies = "-";

        if ($request->allergies) {
            if (count($request->allergies) == 1) {
                $allergies = $request->allergies[0];
            } else {
                $allergies = implode(", ", $request->allergies);
            }

            $allergies = ucwords($allergies);
        }

        DetailUser::where('user_id', $request->user_id)->update([
            'allergies' => $allergies,
        ]);

        return redirect()->route("sign_up_step_5_view");
    }

    public function upload_photo(Request $request)
    {
        $validatedData = $request->validate([
            "image" => 'required|file|max:1024'
        ]);

        // request file     
        $validatedData['image'] = $request->file('image')->store('user-image');

        DetailUser::where('user_id', $request->user_id)->update([
            'image' => $validatedData['image'],
        ]);

        return redirect()->route("sign_up_step_2_view")->with('user_id', $request->user_id);
    }
}
