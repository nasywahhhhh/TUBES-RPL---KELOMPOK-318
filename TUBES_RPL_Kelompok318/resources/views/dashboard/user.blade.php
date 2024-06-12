@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('user') }}</h1>

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
            <h5 class="modal-title" id="exampleModalLabel">Tambah user</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ route('user.store') }}" autocomplete="off">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Nama<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="last_name">Nama Belakang<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="last_name" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="alamat" placeholder="{{ __('Alamat') }}" value="{{ old('alamat') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="kota">Kota<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="kota" placeholder="{{ __('Kota') }}" value="{{ old('kota') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="kodepos">Kodepos<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="kodepos" placeholder="{{ __('Kode Pos') }}" value="{{ old('kodepos') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="email">Email<span class="small text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-user" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="role">Role<span class="small text-danger">*</span></label>
                                    <select name="role" class="form-control form-control-user" id="role">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
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
            <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ route('user.update') }}" autocomplete="off">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" class="form-control form-control-user" name="id" id="id_edit">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Nama<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="name" id="name_edit" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="last_name">Nama Belakang<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="last_name" id="last_name_edit" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="alamat" id="alamat_edit" placeholder="{{ __('Alamat') }}" value="{{ old('alamat') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="kota">Kota<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="kota" id="kota_edit" placeholder="{{ __('Kota') }}" value="{{ old('kota') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="kodepos">Kodepos<span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" name="kodepos" id="kodepos_edit" placeholder="{{ __('Kode Pos') }}" value="{{ old('kodepos') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="email">Email<span class="small text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-user" name="email" id="email_edit" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="role">Role<span class="small text-danger">*</span></label>
                                    <select name="role" class="form-control form-control-user" id="role_edit">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
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
                    <h6 class="m-0 font-weight-bold text-primary">user</h6>
                </div>



                <div class="card-body">
                    {{-- <div class="mb-4">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah data
                          </button>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="display table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Belakang</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Kodepos</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Belakang</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Kodepos</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($user as $data)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->last_name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->alamat}}</td>
                                    <td>{{$data->kota}}</td>
                                    <td>{{$data->kodepos}}</td>
                                    <td>{{$data->role}}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-warning btn-sm open_modal" data-toggle="modal" value="{{$data->id}}" data-target="#EditModal">
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
        var url = "http://127.0.0.1:8000/dashboard/user";
        var id= $(this).val();
        $.get(url + '/' + id, function (data) {
            //success data
            console.log(data);
            $('#id_edit').val(data.id);
            $('#name_edit').val(data.name);
            $('#last_name_edit').val(data.last_name);
            $('#alamat_edit').val(data.alamat);
            $('#kota_edit').val(data.kota);
            $('#kodepos_edit').val(data.kodepos);
            $('#email_edit').val(data.email);
            $('#role_edit').val(data.role);
        })
    });
</script>
@endsection

