<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatientreportRequest;
use App\Http\Requests\UpdatePatientreportRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Patientreport;
use Illuminate\Http\Request;
use Flash;
use Response;

class PatientreportController extends AppBaseController
{
    /**
     * Display a listing of the Patientreport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Patientreport $patientreports */
        $patientreports = Patientreport::paginate(10);

        return view('patientreports.index')
            ->with('patientreports', $patientreports);
    }

    /**
     * Show the form for creating a new Patientreport.
     *
     * @return Response
     */
    public function create()
    {
        return view('patientreports.create');
    }

    /**
     * Store a newly created Patientreport in storage.
     *
     * @param CreatePatientreportRequest $request
     *
     * @return Response
     */
    public function store(CreatePatientreportRequest $request)
    {
        $input = $request->all();

        /** @var Patientreport $patientreport */
        $patientreport = Patientreport::create($input);

        Flash::success('Patientreport saved successfully.');

        return redirect(route('patientreports.index'));
    }

    /**
     * Display the specified Patientreport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Patientreport $patientreport */
        $patientreport = Patientreport::find($id);

        if (empty($patientreport)) {
            Flash::error('Patientreport not found');

            return redirect(route('patientreports.index'));
        }

        return view('patientreports.show')->with('patientreport', $patientreport);
    }

    /**
     * Show the form for editing the specified Patientreport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Patientreport $patientreport */
        $patientreport = Patientreport::find($id);

        if (empty($patientreport)) {
            Flash::error('Patientreport not found');

            return redirect(route('patientreports.index'));
        }

        return view('patientreports.edit')->with('patientreport', $patientreport);
    }

    /**
     * Update the specified Patientreport in storage.
     *
     * @param int $id
     * @param UpdatePatientreportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatientreportRequest $request)
    {
        /** @var Patientreport $patientreport */
        $patientreport = Patientreport::find($id);

        if (empty($patientreport)) {
            Flash::error('Patientreport not found');

            return redirect(route('patientreports.index'));
        }

        $patientreport->fill($request->all());
        $patientreport->save();

        Flash::success('Patientreport updated successfully.');

        return redirect(route('patientreports.index'));
    }

    /**
     * Remove the specified Patientreport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Patientreport $patientreport */
        $patientreport = Patientreport::find($id);

        if (empty($patientreport)) {
            Flash::error('Patientreport not found');

            return redirect(route('patientreports.index'));
        }

        $patientreport->delete();

        Flash::success('Patientreport deleted successfully.');

        return redirect(route('patientreports.index'));
    }
}
