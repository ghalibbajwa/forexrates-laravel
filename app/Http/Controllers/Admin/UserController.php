<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
use App\UserAction;
use App\Post;
use App\Event;
use App\Vehicle;
use App\Order;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('users.users');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        $users = User::orderBy('created_at','desc')->select(['id','username','email','phone','profile_pic','created_at','status']);

        return DataTables::of($users)->make();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function profile($lang, $id)
    {
        $data = [
            'user'          =>  User::with('vehicles','wiping')->find($id),
            'vehicles'      =>  Vehicle::where('user_id',$id)->paginate(10),
            'wipings'       =>  Order::where('user_id',$id)->paginate(10),
        ];
        // return $data;
        return view('users.profile',$data);
    }

    /**
     * Update Status of specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request)
    {
        $response['status'] = false;
        $response['message'] = 'Oops! Something went wrong.';

        $id = $request->input('id');
        $status = $request->input('status');

        $item = User::find($id);

        if ($item->update(['status' => $status])) {

            $response['status'] = true;
            $response['message'] = 'Status updated successfully.';
            return response()->json($response, 200);
        }
        return response()->json($response, 409);
    }
}
