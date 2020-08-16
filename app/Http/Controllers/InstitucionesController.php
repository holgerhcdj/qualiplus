<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateInstitucionesRequest;
use App\Http\Requests\UpdateInstitucionesRequest;
use App\Repositories\InstitucionesRepository;
use App\Repositories\ContactosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\User;
use Flash;
use Response;
use DB;

class InstitucionesController extends AppBaseController
{
    /** @var  InstitucionesRepository */
    private $institucionesRepository;
    private $contactosRepository;

    public function __construct(InstitucionesRepository $institucionesRepo,ContactosRepository $contactosRepo)
    {
        $this->institucionesRepository = $institucionesRepo;
        $this->contactosRepository = $contactosRepo;
    }

    /**
     * Display a listing of the Instituciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $instituciones = DB::select("SELECT * FROM institutes i join users u on i.USU_ID=u.ID ");

        return view('instituciones.index')
            ->with('instituciones', $instituciones);
    }

    /**
     * Show the form for creating a new Instituciones.
     *
     * @return Response
     */
    public function create()
    {
       $asesor=User::pluck('NAME','ID');
        return view('instituciones.create')
        ->with('asesor',$asesor)
        ;
    }

    /**
     * Store a newly created Instituciones in storage.
     *
     * @param CreateInstitucionesRequest $request
     *
     * @return Response
     */
    public function store(CreateInstitucionesRequest $request)
    {
        $input = $request->all();

        $instituciones = $this->institucionesRepository->create($input);

        Flash::success('Instituciones saved successfully.');

        return redirect(route('instituciones.index'));
    }

    /**
     * Display the specified Instituciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {


         $instituciones = $this->institucionesRepository->find($id);
         $contactos = DB::select("SELECT * FROM ins_contacts ic join institutes i on i.INS_ID=ic.INS_ID and ic.INS_ID=$id ");
        // if (empty($instituciones)) {
        //     Flash::error('Instituciones not found');
        //     return redirect(route('instituciones.index'));
        // }
         return view('instituciones.show')
         ->with('instituciones', $instituciones)
         ->with('contactos', $contactos)
         ;
    }

    /**
     * Show the form for editing the specified Instituciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $instituciones = $this->institucionesRepository->find($id);
         $asesor=User::pluck('NAME','ID');
        if (empty($instituciones)) {
            Flash::error('Instituciones not found');
            return redirect(route('instituciones.index'));
        }

        return view('instituciones.edit')
        ->with('instituciones', $instituciones)
        ->with('asesor', $asesor)
        ;
    }

    /**
     * Update the specified Instituciones in storage.
     *
     * @param int $id
     * @param UpdateInstitucionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstitucionesRequest $request)
    {
        $instituciones = $this->institucionesRepository->find($id);

        if (empty($instituciones)) {
            Flash::error('Instituciones not found');

            return redirect(route('instituciones.index'));
        }

        $instituciones = $this->institucionesRepository->update($request->all(), $id);

        Flash::success('Instituciones updated successfully.');

        return redirect(route('instituciones.index'));
    }

    /**
     * Remove the specified Instituciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $instituciones = $this->institucionesRepository->find($id);

        if (empty($instituciones)) {
            Flash::error('Instituciones not found');

            return redirect(route('instituciones.index'));
        }

        $this->institucionesRepository->delete($id);

        Flash::success('Instituciones deleted successfully.');

        return redirect(route('instituciones.index'));
    }
}
