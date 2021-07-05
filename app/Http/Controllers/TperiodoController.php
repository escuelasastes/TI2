<?php

namespace App\Http\Controllers;

use App\Models\Tperiodo;
use Illuminate\Http\Request;

/**
 * Class TperiodoController
 * @package App\Http\Controllers
 */
class TperiodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tperiodos = Tperiodo::paginate();

        return view('tperiodo.index', compact('tperiodos'))
            ->with('i', (request()->input('page', 1) - 1) * $tperiodos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tperiodo = new Tperiodo();
        return view('tperiodo.create', compact('tperiodo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tperiodo::$rules);

        $tperiodo = Tperiodo::create($request->all());

        return redirect()->route('tperiodos.index')
            ->with('success', 'Tperiodo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tperiodo = Tperiodo::find($id);

        return view('tperiodo.show', compact('tperiodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tperiodo = Tperiodo::find($id);

        return view('tperiodo.edit', compact('tperiodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tperiodo $tperiodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tperiodo $tperiodo)
    {
        request()->validate(Tperiodo::$rules);

        $tperiodo->update($request->all());

        return redirect()->route('tperiodos.index')
            ->with('success', 'Tperiodo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tperiodo = Tperiodo::find($id)->delete();

        return redirect()->route('tperiodos.index')
            ->with('success', 'Tperiodo deleted successfully');
    }
}
