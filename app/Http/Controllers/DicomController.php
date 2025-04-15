<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ElieVischel\LaravelDicom\Facades\Dicom;
use Illuminate\Support\Facades\Storage;

class DicomController extends Controller
{
    public function uploadAndReadDicom(Request $request)
    {
        if ($request->hasFile('dicomFile')) {
            $file = $request->file('dicomFile');
            $path = $file->storeAs('dicom', $file->getClientOriginalName());
            $fullPath = storage_path('app/' . $path);

            $dicom = Dicom::read($fullPath);
            dd($dicom);


            // Encode the data to JSON, handling malformed UTF-8 characters
            $jsonResponse = json_encode($data, JSON_INVALID_UTF8_SUBSTITUTE);

            return response()->json(json_decode($jsonResponse));

        }

        return response()->json([
            'success' => false,
            'message' => 'No file uploaded.'
        ], 400);
    }

}

