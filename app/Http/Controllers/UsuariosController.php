<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;
use App\Repositories\UsuariosRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Perfiles;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class UsuariosController extends AppBaseController
{
    /** @var  UsuariosRepository */
    private $usuariosRepository;

    public function __construct(UsuariosRepository $usuariosRepo)
    {
        $this->usuariosRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the Usuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usuarios = $this->usuariosRepository->all();

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created Usuarios in storage.
     *
     * @param CreateUsuariosRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuariosRequest $request)
    {

        $input = $request->all();
        $input['PASSWORD']=bcrypt($input['PASSWORD']);
        $usuarios = $this->usuariosRepository->create($input);
        Flash::success('Usuarios saved successfully.');
        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarios = $this->usuariosRepository->find($id);
        $perfiles=Perfiles::pluck('PRF_DESCRIPCION','PRF_ID');
        $asg_perfiles=DB::select("SELECT * FROM profiles p JOIN profiles_users pu ON p.PRF_ID=pu.PRF_ID where pu.USU_ID=$id  ");
        if (empty($usuarios)) {
            Flash::error('Usuarios not found');
            return redirect(route('usuarios.index'));
        }
        return view('usuarios.show')
        ->with('usuarios', $usuarios)
        ->with('perfiles', $perfiles)
        ->with('asg_perfiles', $asg_perfiles)
        ;
    }

    /**
     * Show the form for editing the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarios = $this->usuariosRepository->find($id);
        if (empty($usuarios)) {
            Flash::error('Usuarios not found');
            return redirect(route('usuarios.index'));
        }

        return view('usuarios.edit')->with('usuarios', $usuarios);
    }

    /**
     * Update the specified Usuarios in storage.
     *
     * @param int $id
     * @param UpdateUsuariosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuariosRequest $request)
    {
        $usuarios = $this->usuariosRepository->find($id);
        $input=$request->all();
        //dd($input);
        $input['PASSWORD']=bcrypt($input['PASSWORD']);
        if (empty($usuarios)) {
            Flash::error('Usuarios not found');

            return redirect(route('usuarios.index'));
        }

        $usuarios = $this->usuariosRepository->update($input, $id);
        Flash::success('Usuarios updated successfully.');
        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified Usuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarios = $this->usuariosRepository->find($id);
        if (empty($usuarios)) {
            Flash::error('Usuarios not found');
            return redirect(route('usuarios.index'));
        }
        $this->usuariosRepository->delete($id);
        Flash::success('Usuarios deleted successfully.');
        return redirect(route('usuarios.index'));
    }
}
