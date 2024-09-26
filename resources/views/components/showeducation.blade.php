<x-admin-layout>
    <x-slot:title>
        Show Education
    </x-slot>


    <div class="pagetitle">
      <h1>Education Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Show Education</li>
          <li class="breadcrumb-item active">Education</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Education Table</h5>
              <a href="{{route('education.create')}}"><button class="btn btn-success btn-md">Add Education</button></a>
                </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>id</b>

                    </th>
                    <th>Degree</th>
                    <th colspan="2">Start to End</th>
                    <th>Institute</th>
                    <th>About</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($educations as $education)
                    <tr>
                        <td> <b>{{$education->id}}</b> </td>
                        <td> {{$education->degree}} </td>
                        <td> {{$education->start_date}} </td>
                        <td> {{$education->end_date}} </td>
                        <td> {{$education->institute}} </td>
                        <td> {{$education->about}} </td>

                        <td> <a href=" {{route('education.edit',["education"=>$education->id])}}" class="text-primary">Edit</a> </td>
                        <td> <form action=" {{route('education.destroy',["education"=>$education->id])}} " method="POST">
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
