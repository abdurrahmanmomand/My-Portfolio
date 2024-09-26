<x-admin-layout>
    <x-slot:title>
       Add Experience
    </x-slot>
    <div class="pagetitle">
        <h1>Add Education</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Add Education</li>
            <li class="breadcrumb-item active">Education</li>
          </ol>
        </nav>
      </div>
    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Education</h5>
    <form action=" {{route('education.store')}} "  method="POST">
        @csrf
        @method('POST')
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Degree</label>
          <div class="col-sm-10">
            <input type="text" name="degree" class="form-control  @error('specialist')
            is-invalid
            @enderror" id="inputText">
            <span class="text-danger">
                @error('birthdate')
                    {{$message}}
                @enderror
              </span>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">start_date</label>
          <div class="col-sm-10">
            <input type="date" name="start_date" class="form-control @error('start_date')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">end_date</label>
          <div class="col-sm-10">
            <input type="date" name="end_date" class="form-control @error('end_date')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Institute</label>
          <div class="col-sm-10">
            <input type="text" name="institute" class="form-control @error('place_of_experiance')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">About</label>
          <div class="col-sm-10">
            <input type="text" name="about" class="form-control @error('phone')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
         <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>

        </div>
      </form>
    </div>
     </div>

     </div>
     </div>
   </section>
</x-admin-layout>
