<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Interfaces\PartnerInterface;

class PartnerController extends Controller
{
    public function __construct(
        private readonly PartnerInterface $partnerRepository
    ) {
    }

    public function index(Request $request)
    {
        $data = $this->partnerRepository->index($request);

        return response()->json([
            "message" => "OK",
            "data" => $data
        ], JsonResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        $data = $this->partnerRepository->store($request);

        return response()->json([
            "message" => "OK",
            "data" => $data
        ], JsonResponse::HTTP_OK);
    }

    public function show($id)
    {
        $data = $this->partnerRepository->show($id);

        return response()->json([
            "message" => "OK",
            "data" => $data
        ], JsonResponse::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $data = $this->partnerRepository->update($request, $id);

        return response()->json([
            "message" => "OK",
            "data" => $data
        ], JsonResponse::HTTP_OK);
    }

    public function destroy($id)
    {
        $data = $this->partnerRepository->destroy($id);

        return response()->json([
            "message" => "OK",
            "data" => $data
        ], JsonResponse::HTTP_OK);
    }
}
