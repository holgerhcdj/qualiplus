<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComunicacionesRequest;
use App\Http\Requests\UpdateComunicacionesRequest;
use App\Repositories\ComunicacionesRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Contactos;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class ComunicacionesController extends AppBaseController
{
    /** @var  ComunicacionesRepository */
    private $comunicacionesRepository;

    public function __construct(ComunicacionesRepository $comunicacionesRepo)
    {
        $this->comunicacionesRepository = $comunicacionesRepo;
    }

    /**
     * Display a listing of the Comunicaciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$comunicaciones = $this->comunicacionesRepository->all();
        $comunicaciones=DB::select("SELECT * FROM comunicatios c 
            join ins_contacts ic on c.CON_ID=ic.CON_ID 
            join institutes i on i.INS_ID=ic.INS_ID 
            ");
        return view('comunicaciones.index')
            ->with('comunicaciones', $comunicaciones);
    }

    /**
     * Show the form for creating a new Comunicaciones.
     *
     * @return Response
     */
    public function create()
    {
        $contactos=Contactos::pluck("CON_NOMBRES","CON_ID");
        return view('comunicaciones.create')
        ->with("contactos",$contactos)
        ;
    }

    /**
     * Store a newly created Comunicaciones in storage.
     *
     * @param CreateComunicacionesRequest $request
     *
     * @return Response
     */
    public function store(CreateComunicacionesRequest $request)
    {
        $input = $request->all();
        $comunicaciones = $this->comunicacionesRepository->create($input);
        Flash::success('Comunicaciones saved successfully.');
        return redirect(route('contactos.show',$comunicaciones->CON_ID));
    }

    /**
     * Display the specified Comunicaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comunicaciones = DB::select("SELECT * FROM comunicatios c 
            join ins_contacts ic on c.CON_ID=ic.CON_ID 
            join institutes i on i.INS_ID=ic.INS_ID 
            WHERE c.COM_ID=$id");

        //DD($comunicaciones);

        if (empty($comunicaciones)) {
            Flash::error('Comunicaciones not found');

            return redirect(route('comunicaciones.index'));
        }

        return view('comunicaciones.show')->with('comunicaciones', $comunicaciones[0]);
    }

    /**
     * Show the form for editing the specified Comunicaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comunicaciones = $this->comunicacionesRepository->find($id);
        $contactos=Contactos::pluck("CON_NOMBRES","CON_ID");
        if (empty($comunicaciones)) {
            Flash::error('Comunicaciones not found');

            return redirect(route('comunicaciones.index'));
        }

        return view('comunicaciones.edit')
        ->with('comunicaciones', $comunicaciones)
        ->with("contactos",$contactos)
        ;
    }

    /**
     * Update the specified Comunicaciones in storage.
     *
     * @param int $id
     * @param UpdateComunicacionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComunicacionesRequest $request)
    {
        $comunicaciones = $this->comunicacionesRepository->find($id);

        if (empty($comunicaciones)) {
            Flash::error('Comunicaciones not found');

            return redirect(route('comunicaciones.index'));
        }

        $comunicaciones = $this->comunicacionesRepository->update($request->all(), $id);

        Flash::success('Comunicaciones updated successfully.');

        return redirect(route('comunicaciones.index'));
    }

    /**
     * Remove the specified Comunicaciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comunicaciones = $this->comunicacionesRepository->find($id);

        if (empty($comunicaciones)) {
            Flash::error('Comunicaciones not found');

            return redirect(route('comunicaciones.index'));
        }
        $this->comunicacionesRepository->delete($id);
        Flash::success('Comunicaciones deleted successfully.');
        return redirect(route('contactos.show',$comunicaciones->CON_ID));

    }
}
