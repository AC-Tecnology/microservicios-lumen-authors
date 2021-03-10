<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;   //para accerder a los metodos response
use App\Models\Author;
use App\Traits\ApiResponser;    //para acceder a los metodos del trait
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;       //para acceder a los metodos del trait
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
        $authors = Author::all();
        //return $authors;
        return $this->successResponse($authors);
    }

    /**
     * Create a instance of Author
     * @return Iluminate\Http\Response
     */

    public function store(Request $request)
    {
        $rules = [
            'name'      => 'required|max:255',
            'gender'    => 'required|max:255|in:Male,Female',
            'country'   => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        //HTTP_CREATED es una constante que devuelve 201 de creado en http
        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * Return a specific authors
     * @return Iluminate\Http\Response
     */

    public function show($id)
    {
        $author = Author::findOrFail($id);

        return $this->successResponse($author);
    }

    /**
     * Update the informations of a author
     * @return Iluminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $rules = [
            'name'      => 'max:255',
            'gender'    => 'max:255|in:Male,Female',
            'country'   => 'max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::findOrFail($id);

        $author->fill($request->all());

        //si no hay cambios
        if ($author->isClean()) {

            //HTTP_CREATED es una conmtante que devuelve 422  que no puede ser procesada
            return $this->errorResponse('Al menos un valor debe cambiar', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->successResponse($author);

    }

    /**
     * Remove the informations of a author
     * @return Iluminate\Http\Response
     */

    public function destroy($id)
    {
        $author = Author::findOrFail($id);

        $author->delete();
        
        return $this->successResponse($author);
    }
}
