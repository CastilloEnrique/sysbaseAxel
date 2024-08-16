<?php

namespace App\Http\Controllers;

use App\DataTables\capacitacionclienteDataTable;
use App\Http\Requests\CreatecapacitacionclienteRequest;
use App\Http\Requests\UpdatecapacitacionclienteRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\capacitacioncliente;
use Illuminate\Http\Request;

class capacitacionclienteController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Capacitacionclientes')->only('show');
        $this->middleware('permission:Crear Capacitacionclientes')->only(['create','store']);
        $this->middleware('permission:Editar Capacitacionclientes')->only(['edit','update']);
        $this->middleware('permission:Eliminar Capacitacionclientes')->only('destroy');
    }
    /**
     * Display a listing of the capacitacioncliente.
     */
    public function index(capacitacionclienteDataTable $capacitacionclienteDataTable)
    {
    return $capacitacionclienteDataTable->render('capacitacionclientes.index');
    }


    /**
     * Show the form for creating a new capacitacioncliente.
     */
    public function create()
    {
        return view('capacitacionclientes.create');
    }

    /**
     * Store a newly created capacitacioncliente in storage.
     */
    public function store(CreatecapacitacionclienteRequest $request)
    {
        $input = $request->all();

        /** @var capacitacioncliente $capacitacioncliente */
        $capacitacioncliente = capacitacioncliente::create($input);

        flash()->success('Capacitacioncliente guardado.');

        return redirect(route('capacitacionclientes.index'));
    }

    /**
     * Display the specified capacitacioncliente.
     */
    public function show($id)
    {
        /** @var capacitacioncliente $capacitacioncliente */
        $capacitacioncliente = capacitacioncliente::find($id);

        if (empty($capacitacioncliente)) {
            flash()->error('Capacitacioncliente no encontrado');

            return redirect(route('capacitacionclientes.index'));
        }

        return view('capacitacionclientes.show')->with('capacitacioncliente', $capacitacioncliente);
    }

    /**
     * Show the form for editing the specified capacitacioncliente.
     */
    public function edit($id)
    {
        /** @var capacitacioncliente $capacitacioncliente */
        $capacitacioncliente = capacitacioncliente::find($id);

        if (empty($capacitacioncliente)) {
            flash()->error('Capacitacioncliente no encontrado');

            return redirect(route('capacitacionclientes.index'));
        }

        return view('capacitacionclientes.edit')->with('capacitacioncliente', $capacitacioncliente);
    }

    /**
     * Update the specified capacitacioncliente in storage.
     */
    public function update($id, UpdatecapacitacionclienteRequest $request)
    {
        /** @var capacitacioncliente $capacitacioncliente */
        $capacitacioncliente = capacitacioncliente::find($id);

        if (empty($capacitacioncliente)) {
            flash()->error('Capacitacioncliente no encontrado');

            return redirect(route('capacitacionclientes.index'));
        }

        $capacitacioncliente->fill($request->all());
        $capacitacioncliente->save();

        flash()->success('Capacitacioncliente actualizado.');

        return redirect(route('capacitacionclientes.index'));
    }

    /**
     * Remove the specified capacitacioncliente from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var capacitacioncliente $capacitacioncliente */
        $capacitacioncliente = capacitacioncliente::find($id);

        if (empty($capacitacioncliente)) {
            flash()->error('Capacitacioncliente no encontrado');

            return redirect(route('capacitacionclientes.index'));
        }

        $capacitacioncliente->delete();

        flash()->success('Capacitacioncliente eliminado.');

        return redirect(route('capacitacionclientes.index'));
    }
}
