<?php

namespace App\Http\Controllers;

use App\DataTables\capacitacionequipoDataTable;
use App\Http\Requests\CreatecapacitacionequipoRequest;
use App\Http\Requests\UpdatecapacitacionequipoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\capacitacionequipo;
use Illuminate\Http\Request;

class capacitacionequipoController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Capacitacionequipos')->only('show');
        $this->middleware('permission:Crear Capacitacionequipos')->only(['create','store']);
        $this->middleware('permission:Editar Capacitacionequipos')->only(['edit','update']);
        $this->middleware('permission:Eliminar Capacitacionequipos')->only('destroy');
    }
    /**
     * Display a listing of the capacitacionequipo.
     */
    public function index(capacitacionequipoDataTable $capacitacionequipoDataTable)
    {
    return $capacitacionequipoDataTable->render('capacitacionequipos.index');
    }


    /**
     * Show the form for creating a new capacitacionequipo.
     */
    public function create()
    {
        return view('capacitacionequipos.create');
    }

    /**
     * Store a newly created capacitacionequipo in storage.
     */
    public function store(CreatecapacitacionequipoRequest $request)
    {
        $input = $request->all();

        /** @var capacitacionequipo $capacitacionequipo */
        $capacitacionequipo = capacitacionequipo::create($input);

        flash()->success('Capacitacionequipo guardado.');

        return redirect(route('capacitacionequipos.index'));
    }

    /**
     * Display the specified capacitacionequipo.
     */
    public function show($id)
    {
        /** @var capacitacionequipo $capacitacionequipo */
        $capacitacionequipo = capacitacionequipo::find($id);

        if (empty($capacitacionequipo)) {
            flash()->error('Capacitacionequipo no encontrado');

            return redirect(route('capacitacionequipos.index'));
        }

        return view('capacitacionequipos.show')->with('capacitacionequipo', $capacitacionequipo);
    }

    /**
     * Show the form for editing the specified capacitacionequipo.
     */
    public function edit($id)
    {
        /** @var capacitacionequipo $capacitacionequipo */
        $capacitacionequipo = capacitacionequipo::find($id);

        if (empty($capacitacionequipo)) {
            flash()->error('Capacitacionequipo no encontrado');

            return redirect(route('capacitacionequipos.index'));
        }

        return view('capacitacionequipos.edit')->with('capacitacionequipo', $capacitacionequipo);
    }

    /**
     * Update the specified capacitacionequipo in storage.
     */
    public function update($id, UpdatecapacitacionequipoRequest $request)
    {
        /** @var capacitacionequipo $capacitacionequipo */
        $capacitacionequipo = capacitacionequipo::find($id);

        if (empty($capacitacionequipo)) {
            flash()->error('Capacitacionequipo no encontrado');

            return redirect(route('capacitacionequipos.index'));
        }

        $capacitacionequipo->fill($request->all());
        $capacitacionequipo->save();

        flash()->success('Capacitacionequipo actualizado.');

        return redirect(route('capacitacionequipos.index'));
    }

    /**
     * Remove the specified capacitacionequipo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var capacitacionequipo $capacitacionequipo */
        $capacitacionequipo = capacitacionequipo::find($id);

        if (empty($capacitacionequipo)) {
            flash()->error('Capacitacionequipo no encontrado');

            return redirect(route('capacitacionequipos.index'));
        }

        $capacitacionequipo->delete();

        flash()->success('Capacitacionequipo eliminado.');

        return redirect(route('capacitacionequipos.index'));
    }
}
