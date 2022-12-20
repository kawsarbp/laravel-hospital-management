@extends('admin.layouts')
@section('title','Appointment')

@section('main-contant')
    <div class="row text-center">
        <div class="col-md-12">

            <section class="card">
                <header class="card-header">
                    Appointments
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
                                    <th class="sorting">Pasent Name</th>
                                    <th class="sorting">Email</th>
                                    <th class="sorting">Phone</th>
                                    <th class="sorting">Doctor name</th>
                                    <th class="sorting">Date</th>
                                    <th class="sorting">Message</th>
                                    <th class="sorting">Status</th>
                                    <th class="sorting">Action</th>
                                </tr>
                                </thead>

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                @foreach($appointments as $appoint)
                                <tr>
                                    <td>{{ $appoint->id }}</td>
                                    <td>{{ $appoint->name }}</td>
                                    <td>{{ $appoint->email }}</td>
                                    <td>{{ $appoint->phone }}</td>
                                    <td>{{ $appoint->doctor }}</td>
                                    <td>{{ $appoint->date }}</td>
                                    <td>{{ $appoint->message }}</td>
                                    <td>{{ $appoint->status }}</td>
                                    <td>
                                        <a href="{{ route('appointment.approved',$appoint->id) }}" class="btn btn-outline-info btn-sm">Approve</a>
                                        <a href="{{ route('appointment.cancel',$appoint->id) }}" class="btn btn-outline-warning btn-sm">Canceled</a>
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
