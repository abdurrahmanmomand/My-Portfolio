<x-admin-layout>
    <x-slot:title>
        Information Form
    </x-slot>
    <div class="pagetitle">
        <h1>Information Form</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Add Informatin</li>
            <li class="breadcrumb-item active">Information</li>
          </ol>
        </nav>
      </div>
    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Information</h5>
    <form action=" {{route('information.store')}} "  method="POST">
        @csrf
        @method('POST')
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Birth Date</label>
          <div class="col-sm-10">
            <input type="date" name="birthdate" class="form-control  @error('birthdate')
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
          <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
          <div class="col-sm-10">
            <input type="age" name="age" class="form-control @error('age')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Website</label>
          <div class="col-sm-10">
            <input type="vachar" name="website" class="form-control @error('website')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Degree</label>
          <div class="col-sm-10">
            <input type="vachar" name="degree" class="form-control @error('degree')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="phone" name="phone" class="form-control @error('phone')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control @error('email')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">City</label>
          <div class="col-sm-10">
            <input type="city" name="city" class="form-control @error('city')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Freelance</label>
          <div class="col-sm-10">
            <input type="vachar" name="freelance" class="form-control @error('freelance')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Extra Information</label>
          <div class="col-sm-10">
            <input type="vachar" name="extrainformation" class="form-control @error('extrainformation')
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
