<x-admin-layout>
    <x-slot:title>
       Add Category
    </x-slot>
    <div class="pagetitle">
        <h1>Add Categories</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Add Categories</li>
            <li class="breadcrumb-item active">Categories</li>
          </ol>
        </nav>
      </div>
    <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Categories</h5>
    <form action=" {{route('category.store')}} "  method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Project Name</label>
          <div class="col-sm-10">
            <input type="text" name="project_name" class="form-control  @error('project_name')
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
          <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
          <div class="col-sm-10">
            <input type="file" name="image" accept="image/*" class="form-control @error('start_date')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label>
          <div class="col-sm-10">
           <select class="form-control" name="category_name" >
                <option value="Select Category" >Select Category</option>
                <option value="ecomerece">Ecomerece</option>
                <option value="point of sale">Point Of Sale</option>
                <option value="trading">Trading</option>
                <option value="custom bussiness">Custom Bussiness</option>
           </select>
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
