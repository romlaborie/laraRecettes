<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        return view('commentaires.create', array('comment' => Comment::where('recipe_id', $recette->id)->get(), 'recipe' => $recette));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $recette = \App\Models\Recette::where('url', request('url'))->first();
        return view('commentaires.create', array('comment' => Comment::where('recipe_id', $recette->id)->get(), 'recipe' => $recette));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        //
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->author_id = rand(1, 5);
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        $comment->recipe_id = $recette->id;
        $comment->save();
        return view('commentaires.create', array('comment' => Comment::where('recipe_id', $recette->id)->get(), 'recipe' => $recette));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $recette = \App\Models\Recette::where('url', request('url'))->first();

        return view('commentaires.create', array('comment' => Comment::where('recipe_id', $recette->id)->get(), 'recipe' => $recette));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($url, Comment $comment) //on y passe autant de parametres que presents dans l'url dans le bon ordre
    {
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        return view('commentaires.edition', array('comment' => $comment, 'recipe' => $recette));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, $url, Comment $comment)
    {
        //
        $comment->content = $request->content;
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        $comment->save();
        return view('commentaires.create', array('comment' => Comment::where('recipe_id', $recette->id)->get(), 'recipe' => $recette));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($url, Comment $comment)
    {

        $recette = \App\Models\Recette::where('url', request('url'))->first();
        $comment->delete();
        return view('commentaires.create', array('comment' => Comment::where('recipe_id', $recette->id)->get(), 'recipe' => $recette));
    }

}
