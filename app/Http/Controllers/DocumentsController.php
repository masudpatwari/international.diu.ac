<?php

namespace App\Http\Controllers;

use App\ForeignStudent;
use App\User;
use App\Libraries\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        if ($request->input('reg_no')) {
            $request->validate(
                [
                    'reg_no' => 'required',
                ],
                [
                    'reg_no.required' => 'Registration no is required',
                ]
            );
            $data['profiles'] = ForeignStudent::with('relUser')->where('registration_no', 'like', '%'.$request->reg_no.'%')->get();
        }
        return view('admin.documents.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Cache::forget('document_data');
        $expiresAt = now()->addMinutes(1000);
        $data['documents'] = Documents::documents();
        $data['profile'] = ForeignStudent::with('relUser', 'relReferralBy')->find($id);
        $data['auth'] = User::with('relAgent', 'relStudent','relEmployee')->find(auth()->user()->id);
        Cache::put('document_data', $data, $expiresAt);
        return view('admin.documents.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf($filename)
    {
        $cache_values = Cache::get('document_data');
        $data['pdf_data'] = collect($cache_values);
        $file_path = storage_path(env('PDF_FILE_STORAGE_PATH')).'/'.$filename.'.pdf';
        $view = \View::make('admin.documents.formats.'.$filename.'', $data);
        $mpdf = new \Mpdf\Mpdf(['tempDir' => storage_path('temp'), 'mode' => 'utf-8', 'format' => 'A4-P', 'orientation' => 'P']);
        $mpdf->SetTitle($filename);
        $mpdf->WriteHTML(file_get_contents( storage_path(env('PDF_CSS_STORAGE_PATH')).'/'.$filename.'.css'), 1);
        $mpdf->WriteHTML($view, 2);
        $mpdf->Output($file_path, 'F');
        return $mpdf->Output($filename, 'I');
    }
}
