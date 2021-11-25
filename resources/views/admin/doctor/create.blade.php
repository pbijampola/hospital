

  @extends('admin.home')

  @section("content")
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Doctor Here</h4>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>

                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
        <form class="forms-sample" action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Full Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="exampleInputUsername2" name="name" placeholder="Enter Full Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="exampleInputMobile" name="phone" placeholder=" Enter Your Enter Your Mobile number">
            </div>
          </div>
          <div class="form-group row">
            <label for="speciality" class="col-sm-3 col-form-label">Speciality</label>
            <div class="col-sm-9">
              <input type="text" class="form-control " name="Speciality"  placeholder="Enter Your Speciality">
            </div>
          </div>
          <div class="form-group row">
            <label for="speciality" class="col-sm-3 col-form-label">experience</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="experience"  placeholder="Enter Your Experience">
            </div>
          </div>
          <div class="form-group row">
            <label for="room number" class="col-sm-3 col-form-label">Room Number</label></label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="room_number"  placeholder="Enter Room Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="room number" class="col-sm-3 col-form-label">Upload Image</label></label>
            <div class="col-sm-9">
              <input type="file" class="form-control" name="image">
            </div>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Submit</button>

        </form>
      </div>
    </div>
</div>
  @endsection
