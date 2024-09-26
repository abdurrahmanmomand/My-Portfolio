<x-admin-layout>
    <x-slot:title>
       Edit Experience
    </x-slot>
    <form action=" {{route('experience.update',$experience->id)}} "  method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">specialist</label>
          <div class="col-sm-10">
            <input type="text" value="{{$experience->specialist}}" name="specialist" class="form-control  @error('specialist')
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
            <input type="date" value="{{$experience->start_date}}" name="start_date" class="form-control @error('start_date')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">end_date</label>
          <div class="col-sm-10">
            <input type="date" value="{{$experience->end_date}}" name="end_date" class="form-control @error('end_date')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">place_of_experience</label>
          <div class="col-sm-10">
            <input type="text" value="{{$experience->place_of_experiance}}" name="place_of_experiance" class="form-control @error('place_of_experiance')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">tasks</label>
          <div class="col-sm-10">
              <textarea id="editor" name="tasks" type="text"  rows="10" cols="87" placeholder="Enter HTML here..."> {{$experience->tasks}} </textarea><br>

          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">About Experience</label>
          <div class="col-sm-10">
              <textarea id="second" name="about_experience" type="text"  rows="10" cols="87" placeholder="Enter HTML here...">{{$experience->about_experience}}</textarea><br>

          </div>
        </div>




        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>

        </div>
      </form>
</x-admin-layout>
