@extends('layout.main')

@section('content')


    <link rel="stylesheet" href="/cropic/croppic.css"/>

<br/><br/><br/>
<div class="container">
    <div class="row margin-bottom-40">
        <div class="col-md-12">
            <h1>Upload and edit images in Laravel using Croppic jQuery plugin</h1>
        </div>
    </div>

    <div class="row margin-bottom-40">
        <div class=" col-md-3">
            <div id="cropContainerEyecandy"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p><a href="http://www.croppic.net/" target="_blank">Croppic</a> is ideal for uploading profile photos,
        or photos where you require predefined size/ratio.</p>
        </div>
    </div>
</div>

@stop