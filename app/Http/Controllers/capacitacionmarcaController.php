<?php

namespace App\Http\Controllers;

use App\DataTables\capacitacionmarcaDataTable;
use App\Http\Requests\CreatecapacitacionmarcaRequest;
use App\Http\Requests\UpdatecapacitacionmarcaRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\capacitacionmarca;
use Illuminate\Http\Request;

class capacitacionmarcaController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Capacitacionmarcas')->only('show');
        $this->middleware('permission:Crear Capacitacionmarcas')->only(['create','store']);
        $this->middleware('permission:Editar Capacitacionmarcas')->only(['edit','update']);
        $this->middleware('permission:Eliminar Capacitacionmarcas')->only('destroy');
    }
    /**
     * Display a listing of the capacitacionmarca.
     */
    public function index(capacitacionmarcaDataTable $capacitacionmarcaDataTable)
    {
    return $capacitacionmarcaDataTable->render('capacitacionmarcas.index');
    }


    /**
     * Show the form for creating a new capacitacionmarca.
     */
    public function create()
    {
        return view('capacitacionmarcas.create');
    }

    /**
     * Store a newly created capacitacionmarca in storage.
     */
    public function store(CreatecapacitacionmarcaRequest $request)
    {
        $input = $request->all();

        /** @var capacitacionmarca $capacitacionmarca */
        $capacitacionmarca = capacitacionmarca::create($input);

        flash()->success('Capacitacionmarca guardado.');

        return redirect(route('capacitacionmarcas.index'));
    }

    /**
     * Display the specified capacitacionmarca.
     */
    public function show($id)
    {
        /** @var capacitacionmarca $capacitacionmarca */
        $capacitacionmarca = capacitacionmarca::find($id);

        if (empty($capacitacionmarca)) {
            flash()->error('Capacitacionmarca no encontrado');

            return redirect(route('capacitacionmarcas.index'));
        }

        return view('capacitacionmarcas.show')->with('capacitacionmarca', $capacitacionmarca);
    }

    /**
     * Show the form for editing the specified capacitacionmarca.
     */
    public function edit($id)
    {
        /** @var capacitacionmarca $capacitacionmarca */
        $capacitacionmarca = capacitacionmarca::find($id);

        if (empty($capacitacionmarca)) {
            flash()->error('Capacitacionmarca no encontrado');

            return redirect(route('capacitacionmarcas.index'));
        }

        return view('capacitacionmarcas.edit')->with('capacitacionmarca', $capacitacionmarca);
    }

    /**
     * Update the specified capacitacionmarca in storage.
     */
    public function update($id, UpdatecapacitacionmarcaRequest $request)
    {
        /** @var capacitacionmarca $capacitacionmarca */
        $capacitacionmarca = capacitacionmarca::find($id);

        if (empty($capacitacionmarca)) {
            flash()->error('Capacitacionmarca no encontrado');

            return redirect(route('capacitacionmarcas.index'));
        }

        $capacitacionmarca->fill($request->all());
        $capacitacionmarca->save();

        flash()->success('Capacitacionmarca actualizado.');

        return redirect(route('capacitacionmarcas.index'));
    }

    /**
     * Remove the specified capacitacionmarca from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var capacitacionmarca $capacitacionmarca */
        $capacitacionmarca = capacitacionmarca::find($id);

        if (empty($capacitacionmarca)) {
            flash()->error('Capacitacionmarca no encontrado');

            return redirect(route('capacitacionmarcas.index'));
        }

        $capacitacionmarca->delete();

        flash()->success('Capacitacionmarca eliminado.');

        return redirect(route('capacitacionmarcas.index'));
    }
}
