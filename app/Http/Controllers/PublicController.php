<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Building;
use App\Customer;
use Validator;

class PublicController extends Controller
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

    public function bookingInitial($building_id,$tgl_sewa,$waktu){

       $building = Building::findOrFail($building_id);
       $time = strtotime($tgl_sewa);
       $tgl_sewa_date = date('d-M-Y',$time);

       return view('bookingform', compact('tgl_sewa_date','waktu','building'));
    }

    public function search(Request $request)
    {
      $input = $request->all();
      $time = strtotime($input['tgl_sewa']);
      $newformat = date('Y-m-d',$time);
      $viewformat = date('l, d-M-Y',$time);

      $query = Transaction::query();
      $query = $query->whereDate('tgl_sewa', '=', $newformat);

      if($input['building_id']!=0){
          $query = $query->where('building_id','=',$input['building_id']);
      }
      if($input['waktu']!=0){
          $query = $query->where('waktu','=',$input['waktu']);
      }
      $trans = $query->get();

      $result = array();
      $buildings = Building::get();
      $i=0;
      foreach ($buildings as $building) {
        $result[$i][0] = $building->nama;

        $result[$i][1] = "Pagi";
        $cek_pagi = Transaction::whereDate('tgl_sewa', '=', $newformat)->where('waktu','=',"Pagi")->where('building_id','=',$building->id)->get();
        //dd($cek_pagi);
        if($cek_pagi->isEmpty()){

          $result[$i][2] = "available";
        }
        else{
          $result[$i][2] = "unavailable";
        }


        $result[$i][3] = "Sore";
        $cek_sore = Transaction::whereDate('tgl_sewa', '=', $newformat)->where('waktu','=',"Sore")->where('building_id','=',$building->id)->get();
        if($cek_sore->isEmpty())
          $result[$i][4] = "available";
        else
          $result[$i][4] = "unavailable";
        $result[$i][5] = $building->harga_pagi;
        $result[$i][6] = $building->harga_sore;

        $result[$i][7] = $building->id;
        $result[$i][8] = $newformat;
        $result[$i][9] = $viewformat;

        $i++;
      }

      //dd($result);
      return view('resultpage', compact('result','viewformat'));

    }

    public function booking(Request $request)
    {
      $input = $request->all();
      //dd($input);
      //validasi
        $validator = Validator::make($input,[
          'nama' => 'required',
          'tlp' => 'required',
          'hp' => 'required',
          'alamat' => 'required',

        ]);
        if($validator->fails()){
          return redirect('bookinginitial/'.$input['building_id'].'/'.$input['tgl_sewa'].'/'.$input['waktu'])->withInput()->withErrors($validator);
        }

        $id_customer = Customer::create($input)->id;

        $data_trans['customer_id'] = $id_customer;
        $data_trans['tgl_booking'] = date('Y-m-d');
        $time = strtotime($input['tgl_sewa']);
        $newformat = date('Y-m-d',$time);
        $data_trans['tgl_sewa'] = $newformat;
        $data_trans['waktu'] = $input['waktu'];
        $data_trans['harga'] = $this->remove_non_numerics($input['harga']);
        $data_trans['status'] = 0;
        $data_trans['building_id'] = $input['building_id'];
        Transaction::create($data_trans);

        return view('selamat', compact('newformat'));
    }

    function remove_non_numerics($str)
    {
        $temp       = trim($str);
        $result  = "";
        $pattern    = '/[^0-9]*/';
        $result     = preg_replace($pattern, '', $temp);

        return $result;
    }
}
