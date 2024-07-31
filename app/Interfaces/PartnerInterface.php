<?php

namespace App\Interfaces;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface PartnerInterface
{
  function index(Request $request);

  function store(Request $request);

  function show($id);

  function update(Request $request, $id);

  function destroy($id);
}
