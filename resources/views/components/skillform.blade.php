<x-admin-layout>
    <x-slot:title>
        Skills Form
    </x-slot>
    <div class="pagetitle">
        <h1>Add Skills</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Add Skills</li>
            <li class="breadcrumb-item active">Skills</li>
          </ol>
        </nav>
      </div>
    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Skills</h5>
    <form action=" {{route('skills.store')}} "  method="POST">
        @csrf
        @method('POST')
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" name="title" class="form-control  @error('birthdate')
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
          <label for="inputEmail3" class="col-sm-2 col-form-label">Parcentage</label>
          <div class="col-sm-10">
            <input type="number" name="parcentage" class="form-control @error('age')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Color</label>
          <div class="col-sm-10">
            <input type="text" name="color" class="form-control @error('degree')
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
