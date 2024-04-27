<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Http\Requests\StoreTeamMemberRequest;
use App\Http\Requests\UpdateTeamMemberRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;

class TeamMemberController extends Controller
{
   
    public function index()
    {
        $teamMembers = TeamMember::with('user')->get();
        return view('admin.team.index',compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.team.create',compact('users'));
    }

   
    public function store(StoreTeamMemberRequest $request)
    {
        $m = new TeamMember();
        $m->user_id = $request->user_id;
        $m->save();
        return redirect()->route('admin.team.index')->with('success','Siz yangi jamao azosini qo`shdingiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMember $teamMember)
    {
    //    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMember $teamMember)
    {
        //
    }

 
    public function update($teamMember)
    {
        $member = TeamMember::where('user_id',$teamMember)->first();
        if($member){
            $member->delete();
            return redirect()->back()->with('success','Siz Foydalanuvchuni Jamoa a`zoligidan o`chirib tashladiniz' );
        }
        return back()->with("erorr","Topilmadi !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMember $teamMember)
    {
        //
    }
}
