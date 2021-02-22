<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        DB::beginTransaction();
        $courseGetId = DB::table('beritas')->insertGetId([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'image' => '',
        ]);

        if ($request->filled('image')) {
            $imgName = '';
            $baseString = explode(';base64,', $request->image);
            $image = base64_decode($baseString[1]);
            $image = imagecreatefromstring($image);

            $ext = explode('/', $baseString[0]);
            $ext = $ext[1];
            $imgName = 'course_' . uniqid() . '.' . $ext;
            if ($ext == 'png') {
                imagepng($image, 'storage/' . $imgName, 8);
            } else {
                imagejpeg($image, 'storage/' . $imgName, 20);
            }
            DB::table('beritas')->where('id', $courseGetId)->update(['image' => $imgName]);
        }
        DB::commit();
        return response()->json(['data' => $courseGetId, 'message' => 'Data berhasil disimpan!'], $this->successStatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
