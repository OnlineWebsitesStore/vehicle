<?php

namespace Vehicle\Taxonomy\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Vehicle\Taxonomy\Models\Vocabulary;
use Vehicle\Taxonomy\Http\Requests\CreateVocabularyRequest;
use Session;
use Redirect;

class VocabularyController extends Controller
{
    private $vocabulary;

    public function __construct(Vocabulary $vocabulary)
    {
        $this->vocabulary = $vocabulary;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vocabs = $this->vocabulary->all();
        return View('taxonomy::vocabulary.list', compact('vocabs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taxonomy::vocabulary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVocabularyRequest $request)
    {
        $this->vocabulary->create($request->all());
        Session::flash('message', 'Vocabulary created successfully');
        return Redirect::to('admin/vocabulary');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($vocabulary)
    {
        if(is_numeric($vocabulary))
        {
            $vocab = $this->vocabulary->where('vid', $vocabulary)->first();
            return View('taxonomy::vocabulary.edit', compact('vocab'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateVocabularyRequest $request, $vocabulary)
    {
        $this->vocabulary->where('vid', $vocabulary)->update($request->except(['_method','_token']));

        Session::flash('message', 'Vocabulary updated successfully');
        return Redirect::to('admin/vocabulary');
    }

    /**
     * Confirm Delete the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($vocabulary)
    {
        if(is_numeric($vocabulary))
        {
            $vocab = $this->vocabulary->where('vid', $vocabulary)->first();
            return view('taxonomy::vocabulary.confirm', compact('vocab') );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($vocabulary)
    {
        if(is_numeric($vocabulary))
        {    
            // delete
            $this->vocabulary->where('vid', $vocabulary)->delete();
            Session::flash('message', 'Vocabulary deleted successfully!');
        }
        else 
        {
            // redirect
            Session::flash('message', 'Some problem with deleting the vocabulary!');
        }    
        return Redirect::to('admin/vocabulary');
    }
}
