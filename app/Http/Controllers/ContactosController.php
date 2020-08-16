<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactosRequest;
use App\Http\Requests\UpdateContactosRequest;
use App\Repositories\ContactosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Instituciones;
use Flash;
use Response;
use DB;

class ContactosController extends AppBaseController
{
    /** @var  ContactosRepository */
    private $contactosRepository;

    public function __construct(ContactosRepository $contactosRepo)
    {
        $this->contactosRepository = $contactosRepo;
    }

    /**
     * Display a listing of the Contactos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contactos = DB::select("SELECT * FROM institutes i JOIN ins_contacts ic ON i.INS_ID=ic.INS_ID order by i.INS_DESCRIPCION ");

        return view('contactos.index')
            ->with('contactos', $contactos);
    }

    /**
     * Show the form for creating a new Contactos.
     *
     * @return Response
     */
    public function create()
    {
        $ins=Instituciones::pluck("INS_DESCRIPCION",'INS_ID');
        return view('contactos.create')
        ->with('ins', $ins)
        ;
    }

    /**
     * Store a newly created Contactos in storage.
     *
     * @param CreateContactosRequest $request
     *
     * @return Response
     */
    public function store(CreateContactosRequest $request)
    {
        $input = $request->all();
        $contactos = $this->contactosRepository->create($input);
        Flash::success('Contactos saved successfully.');
        return redirect(route('instituciones.show',$contactos->INS_ID));

    }

    /**
     * Display the specified Contactos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactos = $this->contactosRepository->find($id);
        $comunicaciones=DB::select("SELECT * FROM comunicatios where CON_ID=$id ");
        if (empty($contactos)) {
            Flash::error('Contactos not found');
            return redirect(route('contactos.index'));
        }

        return view('contactos.show')
        ->with('contactos', $contactos)
        ->with('comunicaciones', $comunicaciones)
        ;
    }

    /**
     * Show the form for editing the specified Contactos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactos = $this->contactosRepository->find($id);
        $ins=Instituciones::pluck("INS_DESCRIPCION",'INS_ID');
        if (empty($contactos)) {
            Flash::error('Contactos not found');

            return redirect(route('contactos.index'));
        }

        return view('contactos.edit')
        ->with('contactos', $contactos)
        ->with('ins', $ins)

        ;
    }

    /**
     * Update the specified Contactos in storage.
     *
     * @param int $id
     * @param UpdateContactosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactosRequest $request)
    {
        $contactos = $this->contactosRepository->find($id);

        if (empty($contactos)) {
            Flash::error('Contactos not found');

            return redirect(route('contactos.index'));
        }

        $contactos = $this->contactosRepository->update($request->all(), $id);

        Flash::success('Contactos updated successfully.');

        return redirect(route('contactos.index'));
    }

    /**
     * Remove the specified Contactos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactos = $this->contactosRepository->find($id);

        if (empty($contactos)) {
            Flash::error('Contactos not found');
            return redirect(route('contactos.index'));
        }
        $this->contactosRepository->delete($id);
        Flash::success('Contactos deleted successfully.');
        return redirect(route('instituciones.show',$contactos->INS_ID));
    }
}
