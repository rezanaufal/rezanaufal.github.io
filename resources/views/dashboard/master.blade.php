@extends('layout.dash_layout')
@section('title. content')
@section('content')

<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing">
                <form action="/upload" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h1>Upload to Portfolio</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input Title</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <input name="judul" placeholder="Title" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input Description</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <textarea name="deskripsi" placeholder="Description" cols="30" rows="10" class="form-control" required></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="custom-file-container" data-upload-id="myFirstImage">

                                    <label class="custom-file-container__custom-file">
                                        <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*" required>
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <input type="submit" name="pass" class="mt-4 btn btn-primary">
                                    </div>
                </form>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>,
                            All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
