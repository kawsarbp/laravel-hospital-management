@extends('admin.layouts')
@section('title','Add Doctor')

@section('main-contant')


    <div class="row justify-content-center">
        <div class="col-lg-6">
            <section class="card">
                <header class="card-header">
                    Doctor Add Form
                </header>
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Doctor Name</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Enter Doctor Name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Doctor Phone</label>
                            <input type="number" class="form-control" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Enter Doctor Phone Number">
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="speciality">Doctor Speciality</label>
                            <select name="speciality" class="form-control" id="speciality">
                                <option value="">Select</option>
                                <option value="skin">Skin</option>
                                <option value="heart">Heart</option>
                                <option value="eye">Eye</option>
                                <option value="nose">Nose</option>
                            </select>
                            @error('speciality') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="room">Doctor Room No</label>
                            <input type="number" name="room" value="{{ old('room') }}" class="form-control" id="room" placeholder="Enter Doctor Room No">
                            @error('room') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="photo">Doctor Image</label>
                            <input type="file" name="photo" class="form-control" id="photo">
                            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Add Doctor</button>
                        </div>

                    </form>

                </div>
            </section>
        </div>
    </div>



@endsection
