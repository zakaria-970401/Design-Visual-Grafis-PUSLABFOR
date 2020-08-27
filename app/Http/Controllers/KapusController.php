<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KapusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('kapus.index');
    }
   
    public function visualgrafis()
    {
        return view ('kapus.visualgrafis');
    }
    
    public function tracking()
    {
        return view ('kapus.tracking');
    }

    public function visualgrafisgabungan()
    {
        return view ('kapus.grafisgabungan');
    }
    public function visualgrafisjakarta()
    {
        return view ('kapus.grafisjakarta');
    }
    public function visualgrafisriau()
    {
        return view ('kapus.grafisriau');
    }
    public function visualgrafispapua()
    {
        return view ('kapus.grafispapua');
    }
    public function visualgrafismedan()
    {
        return view ('kapus.grafismedan');
    }
    public function visualgrafispalembang()
    {
        return view ('kapus.grafispalembang');
    }
    public function visualgrafissemarang()
    {
        return view ('kapus.grafissemarang');
    }
    public function visualgrafissurabaya()
    {
        return view ('kapus.grafissurabaya');
    }
    public function visualgrafisdenpasar()
    {
        return view ('kapus.grafisdenpasar');
    }
    public function visualgrafismakassar()
    {
        return view ('kapus.grafismakassar');
    }
   
    public function januari2020()
    {
        return view ('kapus.grafisgabunganjanuari2020');
    }

    public function februari2020()
    {
        return view ('kapus.grafisgabunganfebruari2020');
    }

    public function maret2020()
    {
        return view ('kapus.grafisgabunganmaret2020');
    }
    
    public function april2020()
    {
        return view ('kapus.grafisgabunganapril2020');
    }
    
    public function mei2020()
    {
        return view ('kapus.grafisgabunganmei2020');
    }
    
    public function juni2020()
    {
        return view ('kapus.grafisgabunganjuni2020');
    }
    
    public function juli2020()
    {
        return view ('kapus.grafisgabunganjuli2020');
    }

    public function agustus2020()
    {
        return view ('kapus.grafisgabunganagustus2020');
    }
    
    public function september2020()
    {
        return view ('kapus.grafisgabunganseptember2020');
    }

    public function oktober2020()
    {
        return view ('kapus.grafisgabunganoktober2020');
    }

    public function november2020()
    {
        return view ('kapus.grafisgabungannovember2020');
    }

    public function desember2020()
    {
        return view ('kapus.grafisgabungandesember2020');
    }
    
    public function trackingtersangka()
    {
        return view ('kapus.trackingtersangka');
    }

    public function trackingkategoritersangka()
    {
        return view ('kapus.trackingkategoritersangka');
    }

    public function trackingtakah()
    {
        return view ('kapus.trackingtakah');
    }

    public function trackingkategoritakah()
    {
        return view ('kapus.trackingkategoritakah');
    }
    
    public function feedback()
    {
        return view ('kapus.feedback');
    }
   
    public function feedbackjakarta()
    {
        return view ('kapus.feedbackjakarta');
    }
    
    public function feedbackriau()
    {
        return view ('kapus.feedbackriau');
    }

    public function feedbackpapua()
    {
        return view ('kapus.feedbackpapua');
    }

    public function feedbackinput()
    {
        return view ('kapus.forminputfeedback');
    }
   
    public function formstatustakah()
    {
        return view ('kapus.formstatustakah');
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
}
