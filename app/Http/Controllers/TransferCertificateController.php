<?php

namespace App\Http\Controllers;

use COM;
use PDF;
use App\Student;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;
use App\Http\Requests\TCsRequest;
use App\StudentOnlineRegistration;
use App\Services\TransferCertificateService;
use App\Http\Requests\TransferCertificateRequest;

class TransferCertificateController extends Controller
{
    public function __construct(private readonly TransferCertificateService $transferCertificateService)
    {
    }

    public function index()
    {
        return view('backend.tc.index', [
            'tcs' => $this->transferCertificateService->getTCs(),
        ]);
    }


    public function create()
    {
        return view('backend.tc.create');
    }


    public function store(TransferCertificateRequest $request)
    {

        $this->transferCertificateService->create($request->validated());
        return redirect()->route('tc.index')
            ->with('success', 'TCs created successfully.');
    }

    public function show($id)
    {
        $TCs = $this->transferCertificateService->findTCsById($id);
        if (!$TCs) {
            abort(404);
        }
        return view('backend.tc.show', compact('TCs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tcs = $this->transferCertificateService->findTCsById($id);
        if (!$tcs) {
            abort(404);
        }
        return view('backend.tc.edit', compact('tcs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransferCertificateRequest $request, $id)
    {
        // dd($request);
        $tc = $this->transferCertificateService->findTCsById($id);
        if (!$tc) {
            abort(404);
        }
        $this->transferCertificateService->updateTCs($request->validated(), $id);
        // $tc->update($request->validated());
        return redirect()->route('tc.index')
            ->with('success', 'TCs Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $TCs = $this->transferCertificateService->findTCsById($id);
        if (!$TCs) {
            abort(404);
        }
        $this->transferCertificateService->deleteTCsById($id);

        return redirect()->route('tc.index')
            ->with('success', 'TCs deleted successfully');
    }


    public function studentSearch(Request $request)
    {
        if ($request->ajax()) {
            
              
             $student = StudentOnlineRegistration::where('roll', $request->roll)
            ->with('studentGroup')->first();

            return view('backend.tc.search-student', compact('student'));
        }
    }
    public function tcPdf($id)
    {
        $tc = $this->transferCertificateService->findTCsById($id);
        // dd($tc->student);
        $student = StudentOnlineRegistration::where('roll', $tc->student->studentSession->roll)->with('class')->first();
        if (!$tc || !$student) {
            abort(404);
        }
        // dd($student);
        return view('backend.tc.tc-format',compact('tc','student'));
        // $data = [
        //     'tc' => $tc,
        // ];
        // $pdf = PDF::loadView('backend.tc.tc-format', $data);
        // return $pdf->download($tc->student->first_name . '-' . $tc->student->id . '.pdf');
    }
}
