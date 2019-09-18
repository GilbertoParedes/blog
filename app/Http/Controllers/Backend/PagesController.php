<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cms\Pages\Repositories\PageRepositoryInterface;
use App\Cms\Pages\Repositories\PageTypeRepositoryInterface;

class PagesController extends Controller
{

    protected $pageRepository;
    protected $pageTypeRepository;

    function __construct(PageRepositoryInterface $pageInterface, PageTypeRepositoryInterface $pageTypeInterface)
    {
        $this->pageRepository = $pageInterface;
        $this->pageTypeRepository = $pageTypeInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = $this->pageRepository->pageByType();
        //dd($pages);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTypes = $this->pageTypeRepository->all();
        
        return view('admin.pages.create', compact('pageTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->pageRepository->create($request->all());
        return redirect()->route('pages.index');
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
    public function edit($id)
    {
        $page = $this->pageRepository->findOrFail($id);
        //dd($page->types);
        return view('admin.pages.edit', compact('page'));
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
        $page = $this->pageRepository->findOrFail($id);
        $page->update($request->all());
        return back();
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
