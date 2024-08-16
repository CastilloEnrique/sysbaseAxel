<?php

namespace App\Http\Controllers;

use App\DataTables\capacitacionMarcasDataTable;
use App\Http\Requests\CreatecapacitacionMarcasRequest;
use App\Http\Requests\UpdatecapacitacionMarcasRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\capacitacionMarcas;
use Illuminate\Http\Request;

class capacitacionMarcasController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Capacitacion Marcas')->only('show');
        $this->middleware('permission:Crear Capacitacion Marcas')->only(['create','store']);
        $this->middleware('permission:Editar Capacitacion Marcas')->only(['edit','update']);
        $this->middleware('permission:Eliminar Capacitacion Marcas')->only('destroy');
    }
    /**
     * Display a listing of the capacitacionMarcas.
     */
    public function index(capacitacionMarcasDataTable $capacitacionMarcasDataTable)
    {
    return $capacitacionMarcasDataTable->render('capacitacion_marcas.index');
    }


    /**
     * Show the form for creating a new capacitacionMarcas.
     */
    public function create()
    {
        return view('capacitacion_marcas.create');
    }

    /**
     * Store a newly created capacitacionMarcas in storage.
     */
    public function store(CreatecapacitacionMarcasRequest $request)
    {
        $input = $request->all();

        /** @var capacitacionMarcas $capacitacionMarcas */
        $capacitacionMarcas = capacitacionMarcas::create($input);

        flash()->success('Capacitacion Marcas guardado.');

        return redirect(route('capacitacionMarcas.index'));
    }

    /**
     * Display the specified capacitacionMarcas.
     */
    public function show($id)
    {
        /** @var capacitacionMarcas $capacitacionMarcas */
        $capacitacionMarcas = capacitacionMarcas::find($id);

        if (empty($capacitacionMarcas)) {
            flash()->error('Capacitacion Marcas no encontrado');

            return redirect(route('capacitacionMarcas.index'));
        }

        return view('capacitacion_marcas.show')->with('capacitacionMarcas', $capacitacionMarcas);
    }

    /**
     * Show the form for editing the specified capacitacionMarcas.
     */
    public function edit($id)
    {
        /** @var capacitacionMarcas $capacitacionMarcas */
        $capacitacionMarcas = capacitacionMarcas::find($id);

        if (empty($capacitacionMarcas)) {
            flash()->error('Capacitacion Marcas no encontrado');

            return redirect(route('capacitacionMarcas.index'));
        }

        return view('capacitacion_marcas.edit')->with('capacitacionMarcas', $capacitacionMarcas);
    }

    /**
     * Update the specified capacitacionMarcas in storage.
     */
    public function update($id, UpdatecapacitacionMarcasRequest $request)
    {
        /** @var capacitacionMarcas $capacitacionMarcas */
        $capacitacionMarcas = capacitacionMarcas::find($id);

        if (empty($capacitacionMarcas)) {
            flash()->error('Capacitacion Marcas no encontrado');

            return redirect(route('capacitacionMarcas.index'));
        }

        $capacitacionMarcas->fill($request->all());
        $capacitacionMarcas->save();

        flash()->success('Capacitacion Marcas actualizado.');

        return redirect(route('capacitacionMarcas.index'));
    }

    /**
     * Remove the specified capacitacionMarcas from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var capacitacionMarcas $capacitacionMarcas */
        $capacitacionMarcas = capacitacionMarcas::find($id);

        if (empty($capacitacionMarcas)) {
            flash()->error('Capacitacion Marcas no encontrado');

            return redirect(route('capacitacionMarcas.index'));
        }

        $capacitacionMarcas->delete();

        flash()->success('Capacitacion Marcas eliminado.');

        return redirect(route('capacitacionMarcas.index'));
    }
}
