<?php

namespace Containment\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * @param Request $request
     * @param string $typeOne
     * @param int $idOne
     * @param string $typeTwo
     * @param int $idTwo
     *
     * @return JsonResponse
     */
    public function attach(Request $request, $typeOne, $idOne, $typeTwo, $idTwo)
    {
        return response()->json([

        ]);
    }

    /**
     * @param Request $request
     * @param string $typeOne
     * @param int $idOne
     * @param string $typeTwo
     * @param int $idTwo
     *
     * @return JsonResponse
     */
    public function detach(Request $request, $typeOne, $idOne, $typeTwo, $idTwo)
    {
        return response()->json([

        ]);
    }

    /**
     * @param Request $request
     * @param string $typeOne
     * @param int $id
     * @param string $typeTwo
     *
     * @return JsonResponse
     */
    public function sync(Request $request, $typeOne, $id, $typeTwo)
    {
        return response()->json([

        ]);
    }

    /**
     * @param Request $request
     * @param string $type
     * @param int $id
     *
     * @return JsonResponse
     */
    public function detail(Request $request, $type, $id)
    {
        return response()->json([

        ]);
    }

    /**
     * @param Request $request
     * @param string $type
     * @param int $id
     *
     * @return JsonResponse
     */
    public function update(Request $request, $type, $id)
    {
        return response()->json([

        ]);
    }

    /**
     * @param Request $request
     * @param string $type
     * @param int $id
     *
     * @return JsonResponse
     */
    public function destroy(Request $request, $type, $id)
    {
        return response()->json([

        ]);
    }

    /**
     * @param Request $request
     * @param string $type
     *
     * @return JsonResponse
     */
    public function index(Request $request, $type)
    {
        return response()->json([

        ]);
    }

    /**
     * @param Request $request
     * @param string $type
     *
     * @return JsonResponse
     */
    public function create(Request $request, $type)
    {
        return response()->json([

        ]);
    }
}
