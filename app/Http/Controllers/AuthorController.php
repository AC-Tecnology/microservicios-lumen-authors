<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return authors List
     * @return Iluminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Create a instance of Author
     * @return Iluminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Return a specific authors
     * @return Iluminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Update the informations of a author
     * @return Iluminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the informations of a author
     * @return Iluminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
