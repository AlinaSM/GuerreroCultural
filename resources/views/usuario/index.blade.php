@extends('layouts.app')

@section('title', 'Estado')

@section('content')

    <div class="container">
            <h1>Municipios de Guerrero</h1>
    </div>
                
                
                <div class="parallax-container">
                    <div class="parallax"><img src="{{ asset('images/calle_en_taxco.jpg') }}"></div>
                </div>

                <div class="section amber darken-2">
                        <div class="row ">
                            
                            <div class="col s8">
                            <h4>Las lenguas que se hablan en el estado de guerrero.</h4>
                            </div>
                           
                        </div>
                </div>

                <div class="parallax-container">
                    <div class="parallax"><img src="{{ asset('images/acapulco_vista.jpg') }}"></div>
                </div>
                
                <div class="section amber darken-2">
                        <div class="row ">
                            
                            <div class="col s8">
                            <h4>Las lenguas que se hablan en el estado de guerrero.</h4>
                            </div>
                           
                        </div>
                </div>
                
                <div class="parallax-container">
                    <div class="parallax"><img src="{{ asset('images/atardecer_zihua.jpg') }}"></div>
                </div>

@endsection