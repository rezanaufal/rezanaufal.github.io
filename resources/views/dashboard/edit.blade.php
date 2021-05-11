@extends('layout.dash_layout')
@section('title.content')
@section('content')

<div class="row layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <table id="style-3" class="table style-3  table-hover">
                    <thead>
                        <tr>
                            <th class="checkbox-column text-center"> Record Id </th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Aksi</th>

                        </tr>
                    </thead>
                    @foreach ($data_portofolio as $portofolio)
                    <tbody>
                        <tr>
                            <td style="width: 10px" class="text-center"> {{$portofolio->id}} </td>
                            <td class="text-center">
                                <span><img style="width: 250px" src="{{$portofolio->gambar}}" class="text-center"
                                        alt=""></span>
                            </td>
                            <td style="width: 100px" class="text-center">{{$portofolio->judul}}</td>
                            <td style="width: 350px" class="text-center">{{$portofolio->deskripsi}}</td>
                            <td class="text-center">
                                <ul class="table-controls text-center">
                                    <li><span class="badge badge-warning" style="width: 70px; cursor: pointer"
                                            data-toggle="modal"
                                            data-target="#updateModal-{{$portofolio->id}}">Update</span></li>
                                    <br>
                                    <li><span class="badge badge-danger" style="width: 70px; cursor: pointer"
                                            data-toggle="modal"
                                            data-target="#deleteModal-{{$portofolio->id}}">Delete</span></li>
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@foreach ($data_portofolio as $portofolio)
<div class="modal fade" id="updateModal-{{$portofolio->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/update-portfolio" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">
                                        <label>Input Title</label>
                                        <input name="judul" value="{{$portofolio->judul}}" class="form-control">
                                        <input type="hidden" name="id" value="{{$portofolio->id}}">
                                    </div>

                                    <div class="form-group col-xl-12 col-md-12 col-sm-12 col-12">
                                        <label>Input Description</label>
                                        <input name="deskripsi" value="{{$portofolio->deskripsi}}" class="form-control">
                                    </div>

                                    <div class="custom-file-container col-xl-12 col-md-12 col-sm-12 col-12"
                                        data-upload-id="myFirstImage">

                                        <label class="custom-file-container__custom-file">
                                            <input type="file" name="image"
                                                class="custom-file-container__custom-file__custom-file-input"
                                                accept="image/*">
                                            <span
                                                class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-warning" value="Simpan">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal-{{$portofolio->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Data Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="font-size: 20px;">
                <b>Hapus data pada portofolio ?</b>
            </div>
            <form action="/delete-portfolio/{{$portofolio->id}}" method="POST">
                {{ csrf_field() }}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input  type="submit" class="btn btn-warning" value="Hapus">
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
