<x-admin-layout>
    <x-slot:title>
       Add Experience
    </x-slot>
    <form action="{{route('education.update',$educations->id)}}"  method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Degree</label>
          <div class="col-sm-10">
            <input type="text" value="{{$educations->degree}}" name="degree" class="form-control  @error('specialist')
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
            <input type="date" value="{{$educations->start_date}}" name="start_date" class="form-control @error('start_date')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">end_date</label>
          <div class="col-sm-10">
            <input type="date" value="{{$educations->end_date}}" name="end_date" class="form-control @error('end_date')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Institute</label>
          <div class="col-sm-10">
            <input type="text" value="{{$educations->institute}}" name="institute" class="form-control @error('place_of_experiance')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">About</label>
          <div class="col-sm-10">
            <input type="text" value="{{$educations->about}}" name="about" class="form-control @error('phone')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
         <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>

        </div>
      </form>
</x-admin-layout>
