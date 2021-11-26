@extends("admin.home")

@section("content")

<div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

    <form class="main-form" action="{{ route('appointment.store') }}" method="post">
      @csrf
      <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" class="form-control" placeholder="Full name" name="name">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" class="form-control" name="email" placeholder="Email address..">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date"  name="date" class="form-control">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" id="departement" class="custom-select">
              <option>--Select Doctor--</option>
            @foreach ($doctors as $doctor )
            <option value="{{ $doctor->name}}">{{ $doctor->name}} --speciality-- {{ $doctor->Speciality}}</option>
            @endforeach
            {{-- <option value="cardiology">Cardiology</option>
            <option value="dental">Dental</option>
            <option value="neurology">Neurology</option>
            <option value="orthopaedics">Orthopaedics</option> --}}
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input type="text" name="phone" class="form-control" placeholder="Number..">
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Add Appointment</button>
    </form>
  </div>

@endsection
