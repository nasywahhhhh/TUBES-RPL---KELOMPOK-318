@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Kategori') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ route('artikel.store') }}" autocomplete="off">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="nama">Nama<span class="small text-danger">*</span></label>
                                    <input type="text" id="nama" class="form-control" name="nama" placeholder="Makanan diet menyembuhkan penyakit..." value="{{ old('nama') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="url">URL<span class="small text-danger">*</span></label>
                                    <input type="text" id="url" class="form-control" name="url" placeholder="https://contoh.com" value="{{ old('url') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="gambar">Gambar<span class="small text-danger">*</span></label>
                                    <input type="file" id="gambar" class="form-control" name="gambar" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ route('artikel.update') }}" autocomplete="off">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" id="id_edit" class="form-control" name="id">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="nama">Nama<span class="small text-danger">*</span></label>
                                    <input type="text" id="nama_edit" class="form-control" name="nama" placeholder="Makanan diet menyembuhkan penyakit..." value="{{ old('nama') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="url">URL<span class="small text-danger">*</span></label>
                                    <input type="text" id="url_edit" class="form-control" name="url" placeholder="https://contoh.com" value="{{ old('url') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="gambar">Gambar<span class="small text-danger">*</span></label>
                                    <input type="file" id="gambar" class="form-control" name="gambar" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            </div>
        </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
                </div>



                <div class="card-body">
                    <div class="mb-4">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah data
                          </button>
                    </div>
                    <div class="table-responsive">
                        <table class="display table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Artikel</th>
                                    <th>Url</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Artikel</th>
                                    <th>Url</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($artikel as $k)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$k->nama}}</td>
                                    <td>{{$k->url}}</td>
                                    <td>
                                        <img style="width: 25%" src="/images/{{$k->gambar}}" alt="" srcset="">
                                    </td>
                                    <td>
                                        <form action="{{ route('artikel.destroy', $k->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-warning btn-sm open_modal" data-toggle="modal" value="{{$k->id}}" data-target="#EditModal">
                                                Edit
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>


                                    </td>
                                </tr>
                                <?php $no++ ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>

@endsection

@section('js')
<script>
    $(document).on('click','.open_modal',function(){
        var url = "http://127.0.0.1:8000/dashboard/artikel";
        var id= $(this).val();
        $.get(url + '/' + id, function (data) {
            //success data
            console.log(data);
            $('#id_edit').val(data.id);
            $('#nama_edit').val(data.nama);
            $('#url_edit').val(data.url);
        })
    });
</script>
@endsection
