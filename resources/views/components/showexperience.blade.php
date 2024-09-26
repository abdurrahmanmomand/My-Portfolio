<x-admin-layout>
    <x-slot:title>
        Show Experience
    </x-slot>


    <div class="pagetitle">
      <h1>Experience Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Show Experience</li>
          <li class="breadcrumb-item active">Experience</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Experience Table</h5>
              <a href="{{route('experience.create')}}"><button class="btn btn-success btn-md">Add Experience</button></a>
                </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>id</b>

                    </th>
                    <th>specialist</th>
                    <th colspan="2">Start to End</th>
                    <th>place_of_experiance</th>
                    <th>tasks</th>
                    <th>about_experience</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($experience as $ex)
                    <tr>
                        <td> <b>{{$ex->id}}</b> </td>
                        <td> {{$ex->specialist}} </td>
                        <td> {{$ex->start_date}} </td>
                        <td> {{$ex->end_date}} </td>
                        <td> {{$ex->place_of_experiance}} </td>
                        <td> {!!$ex->tasks!!} </td>
                        <td> {!!$ex->about_experience!!} </td>

                        <td> <a href=" {{route('experience.edit',$ex->id)}}" class="text-primary">Edit</a> </td>
                        <td> <form action=" {{route('experience.destroy',$ex->id)}} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button name="submit" type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form> </td>
                      </tr>
                    @endforeach


                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>


</x-admin-layout>
