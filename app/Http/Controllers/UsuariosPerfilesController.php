<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosPerfilesRequest;
use App\Http\Requests\UpdateUsuariosPerfilesRequest;
use App\Repositories\UsuariosPerfilesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsuariosPerfilesController extends AppBaseController
{
    /** @var  UsuariosPerfilesRepository */
    private $usuariosPerfilesRepository;

    public function __construct(UsuariosPerfilesRepository $usuariosPerfilesRepo)
    {
        $this->usuariosPerfilesRepository = $usuariosPerfilesRepo;
    }

    /**
     * Display a listing of the UsuariosPerfiles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usuariosPerfiles = $this->usuariosPerfilesRepository->all();

        return view('usuarios_perfiles.index')
            ->with('usuariosPerfiles', $usuariosPerfiles);
    }

    /**
     * Show the form for creating a new UsuariosPerfiles.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuarios_perfiles.create');
    }

    /**
     * Store a newly created UsuariosPerfiles in storage.
     *
     * @param CreateUsuariosPerfilesRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuariosPerfilesRequest $request)
    {
        $input = $request->all();
        $usuariosPerfiles = $this->usuariosPerfilesRepository->create($input);
        Flash::success('Usuarios Perfiles saved successfully.');
        return redirect(route('usuarios.show',$usuariosPerfiles->USU_ID));
    }

    /**
     * Display the specified UsuariosPerfiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuariosPerfiles = $this->usuariosPerfilesRepository->find($id);

        if (empty($usuariosPerfiles)) {
            Flash::error('Usuarios Perfiles not found');

            return redirect(route('usuariosPerfiles.index'));
        }

        return view('usuarios_perfiles.show')->with('usuariosPerfiles', $usuariosPerfiles);
    }

    /**
     * Show the form for editing the specified UsuariosPerfiles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuariosPerfiles = $this->usuariosPerfilesRepository->find($id);

        if (empty($usuariosPerfiles)) {
            Flash::error('Usuarios Perfiles not found');

            return redirect(route('usuariosPerfiles.index'));
        }

        return view('usuarios_perfiles.edit')->with('usuariosPerfiles', $usuariosPerfiles);
    }

    /**
     * Update the specified UsuariosPerfiles in storage.
     *
     * @param int $id
     * @param UpdateUsuariosPerfilesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuariosPerfilesRequest $request)
    {
        $usuariosPerfiles = $this->usuariosPerfilesRepository->find($id);

        if (empty($usuariosPerfiles)) {
            Flash::error('Usuarios Perfiles not found');

            return redirect(route('usuariosPerfiles.index'));
        }

        $usuariosPerfiles = $this->usuariosPerfilesRepository->update($request->all(), $id);

        Flash::success('Usuarios Perfiles updated successfully.');

        return redirect(route('usuariosPerfiles.index'));
    }

    /**
     * Remove the specified UsuariosPerfiles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuariosPerfiles = $this->usuariosPerfilesRepository->find($id);
        if (empty($usuariosPerfiles)) {
            Flash::error('Usuarios Perfiles not found');
            return redirect(route('usuariosPerfiles.index'));
        }
        $this->usuariosPerfilesRepository->delete($id);
        Flash::success('Usuarios Perfiles deleted successfully.');
        return redirect(route('usuarios.show',$usuariosPerfiles->USU_ID));
    }
}
