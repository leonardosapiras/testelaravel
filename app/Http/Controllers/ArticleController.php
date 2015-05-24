<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
//use Request;
use Illuminate\Support\Facades\Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$articles = \App\Article::all();
                return view('articles.index', compact('articles'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\ArticleRequest $request)
	{
		
		$input = Request::all();
		$article = new \App\Article;
		$article->titulo = $input['titulo'];
		$article->conteudo = $input['conteudo'];
		$article->autor = $input['autor'];
		$article->save();
		
		return redirect('articles');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = \App\Article::findOrFail($id);
		//return view('articles.show', compact('article'));
		return view('articles.show')->with('article', $article);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = \App\Article::findOrFail($id);
		return view('articles.edit')->with('article', $article);
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Requests\ArticleRequest $request)
	{
		$article = \App\Article::findOrFail($id);
		
		$input = Request::all();
		$article->titulo = $input['titulo'];
		$article->conteudo = $input['conteudo'];
		$article->autor = $input['autor'];
		$ok = $article->update();
		
		return redirect('articles');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}