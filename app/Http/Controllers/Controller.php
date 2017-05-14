<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  protected function destroyResource ($request, $resource)
  {
      $successMessage = 'Les dades se han esborrat correctament.';
      $failureMessage = 'Error esborrant les dades.';
      $class = get_class($resource);
      $name = strtolower(substr($class, 1+strpos($class,'\\')));
      if($resource->delete()){
          if($request->ajax()){
              return response()->json([
                  'result' => 'success',
                  'message' => $successMessage,
              ], 200);
          }
          flash($successMessage)->success();
          return redirect()->route($name.'.index');
      }
      
      if($request->ajax()){
          return response()->json([
              'result' => 'failure',
              'message' => $failureMessage,
          ], 400);
      }
      flash($failureMessage)->error();
      return redirect()->route('school.index');
  }
}
