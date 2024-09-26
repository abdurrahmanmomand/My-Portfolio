<x-admin-layout>
    <x-slot:title>
        Show Skills
    </x-slot>


    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Datatables</h5>
              <a href="{{route('skills.create')}}"><button class="btn btn-success btn-md">Add Skills</button></a>
                </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>id</b>

                    </th>
                    <th>Title</th>
                    <th>Parcentage</th>
                    <th>Color</th>
                    <th>User_id</th>
                    <th>Section_id</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Created_at</th>
                    <th data-type="date" data-format="YYYY/DD/MM">updated_at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                    <tr>
                        <td> <b>{{$skill->id}}</b> </td>
                        <td> {{$skill->title}} </td>
                        <td> {{$skill->parcentage}} </td>
                        <td> {{$skill->color}} </td>
                        <td> {{$skill->user_id}} </td>
                        <td> {{$skill->section_id}} </td>
                        <td> {{$skill->created_at}} </td>
                        <td> {{$skill->updated_at}} </td>
                        <td> <a href=" {{route('skills.edit',["skill"=>$skill->id])}}" class="text-primary">Edit</a> </td>
                        <td> <form action=" {{route('skills.destroy',["skill"=>$skill->id])}} " method="POST">
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
