@extends('layouts.master')
@section('content')

<!-- contact section-->
<div class='contact'>
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact</h1>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                    {{-- <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                        <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=new+york&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                            </iframe>
                        </div>
                        <a class="googlemaps-html" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a>
                        <style>#embedmap-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}
                        </style>
                    </div>
                </div> --}}

                <div class="col-lg-6">
                    <!-- form fields -->
                    <form action ="" method="" >
                        <input type="text" class="form-control form-control-lg" placeholder="Name" style=" background-color:rgba(0,0,0,0) !important;  !important;">
                        <input type="email" class="form-control mt-3" placeholder="Email" style=" background-color:rgba(0,0,0,0) !important;  !important;">
                        <input type="text" class="form-control mt-3" placeholder="Subject" style=" background-color:rgba(0,0,0,0) !important;  !important;">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Project Details"  style=" background-color:rgba(0,0,0,0) !important;  !important;"></textarea>
                        </div>
                    </form>
                    <button type="button" class="btn btn-secondary mt-3">Contact Me</button>
                    
                </div>

            </div>
        </div>
    </section>
</div>
@endsection