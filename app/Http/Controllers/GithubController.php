<?php

namespace App\Http\Controllers;

use App\Github;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    protected $gitHub;

    public function __construct(Github $gitHub)
    {
        $this->gitHub = $gitHub;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $username = $request->username;
        $decode = $this->gitHub->getUser($username);
        return view('profile', compact('decode'));

    }

    public function getRepo(Request $request)
    {
        $username = $request->username;
        $repos = $this->gitHub->getRepo($username);
        return view('repo', compact('repos'));
    }

    public function getEachRepo(Request $request)
    {
        // dd($request);
        $commits = $this->gitHub->getCommit($request);
        $issues = $this->gitHub->getIssue($request);
        $pullrequests = $this->gitHub->getPull($request);
        // dd($commits, $issues);
        // $
        return view('eachrepo', compact('commits', 'issues', 'pullrequests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
