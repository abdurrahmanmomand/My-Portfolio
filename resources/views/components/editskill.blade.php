<x-admin-layout>
    <x-slot:title>
        Skills Form
    </x-slot>
    <form action=" {{route('skills.update',["skill"=>$skill->id])}} "  method="POST">
        @csrf
        @method('PUT')

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" value=" {{$skill->title}} " name="title" class="form-control  @error('birthdate')
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
            <input type="number" value="{{$skill->parcentage}}" name="parcentage" class="form-control @error('age')
            is-invalid
            @enderror" id="inputEmail">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Color</label>
          <div class="col-sm-10">
            <input type="text" value=" {{$skill->color}} " name="color" class="form-control @error('degree')
            is-invalid
            @enderror" id="inputPassword">
          </div>
        </div>


        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>

        </div>
      </form>
</x-admin-layout>
