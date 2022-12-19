@extends('admin.layouts')
@section('title','Manage Doctor')

@section('main-contant')

    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <header class="card-header">
                    Dynamic Table
                    <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
                </header>
                <div class="card-body">
                    <div class="adv-table">
                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid">

                            <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting">SL NO</th>
                                    <th class="sorting">Doctor Name</th>
                                    <th class="sorting">Doctor Phone</th>
                                    <th class="sorting">Doctor Speciality</th>
                                    <th class="sorting">Doctor Room</th>
                                    <th class="sorting">Doctor Photo</th>
                                    <th class="sorting">Action</th>
                                </tr>
                                </thead>

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach($doctors as $doctor)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>{{ $doctor->speciality }}</td>
                                    <td>{{ $doctor->room }}</td>
                                    <td>
                                        <img style="width: 100px;" src="/uploads/doctors/{{ $doctor->photo }}" alt="">
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-outline-info btn-sm">Edit</a>
                                        <form action="{{ route('destroy',$doctor->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
