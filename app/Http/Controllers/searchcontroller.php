<?php

namespace App\Http\Controllers;

use App\Models\donerlist;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class searchcontroller extends Controller
{
    public function search(Request $request){

        if($request->ajax()){

            $data=donerlist::where('donername','like','%'.$request->search.'%')
            ->orwhere('donerbloodtype','like','%'.$request->search.'%')
            ->orwhere('doneraddress','like','%'.$request->search.'%')->get();


            $output='';
        if(count($data)>0){

            $output .='<div class="row" style="display:flex; justify-content:space-between; align-items:stretch;">';

                    foreach($data as $row){
                        $output .='



                                <div class="col-4 mt-4 mb-4" style="width: 18rem;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">'.$row->donername.'</h5>
                                            <p class="card-text">'.$row->donerbloodtype.'</p>
                                            <h6 class="card-subtitle mb-2 text-muted">'.$row->donerposttitle.'</h6>
                                            <p class="card-text">'.$row->donerpostdescription.'</p>
                                            <a style="text-shadow: 4px 4px 10px #000000; box-shadow:2px 2px 25px #000;" href="'.route('viewDonor' , $row->userid).'" class="btn">View Donor</a>
                                        </div>
                                    </div>
                                </div>


                        ';
                    }

                    $output.='</div>';




        }
        else{

            $output .='No results';

        }

        return $output;

        }




      }
}
