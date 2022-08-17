<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\UserRepository;

class UserController extends Controller
{
    private $userRepository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * Lista todos os usuarios da loja
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request) {
        try {
            $user = $this->userRepository->index($request);
            response()->json([$user], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => trans($th->getMessage())], 404);
        }
    }

    /**
     * Metodo que retorna a view para criar usuarios
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request) {

    }

    /**
     * Armazenar usuario no banco
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request) {
        try {
            $user = $this->userRepository->store($request);
            response()->json([$user], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => trans($th->getMessage())], 404);
        }
    }

    /**
     * traz todas as informações de um usuario
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function show(Request $request) {
        try {
            $user = $this->userRepository->find($request);
            return response()->json([$user], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => trans($th->getMessage())], 404);
        }
    }

    /**
     * Metodo que leva ate a tela de edição do usuario
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function edit(Request $request) {
        
    }

    /**
     * Atualiza o usuario no banco
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request, $id) {
        try {
            $this->userRepository->update($id,$request);
            return response()->json("Dados do usuário atualizados com sucesso.", 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => trans($th->getMessage())], 404);
        }
    }

    /**
     * Deleta o usuario
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy(Request $request) {
        
    }
}
