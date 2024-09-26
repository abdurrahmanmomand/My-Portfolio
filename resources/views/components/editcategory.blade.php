<x-admin-layout>
    <x-slot:title>
       Edit Category
    </x-slot>
    <form action=" {{route('category.update',$category->id)}} "  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Project Name</label>
          <div class="col-sm-10">
            <input type="text" value="{{$category->project_name}}" name="project_name" class="form-control  @error('project_name')
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
            <img id="image" src="{{asset('/storage/'.$category->image)}}" width="100px" height="100px">
            <input type="file" name="image" onchange="document.querySelector('#image').src=window.URL.createObjectURL(this.files[0])"     id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Drag image" accept="image/*" class="form-control @error('start_date')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Category Name</label>
          <div class="col-sm-10">
           <select class="form-control"  name="category_name" >
                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

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
</x-admin-layout>
