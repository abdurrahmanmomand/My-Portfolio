<x-admin-layout>
    <x-slot:title>
        Show Categories
    </x-slot>


    <div class="pagetitle">
      <h1>Categories Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Show Categories</li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Categories Table</h5>
                    <a href="{{route('category.create')}}"><button class="btn btn-success btn-md">Add Category</button></a>
                </div>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>id</b>

                    </th>
                    <th>Project Name</th>
                    <th >Image</th>
                    <th>Category Name</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $ex)
                    <tr>
                        <td> <b>{{$ex->id}}</b> </td>
                        <td> {{$ex->project_name}} </td>
                        <td> <img src=" {{asset('/storage/'.$ex->image)}}" height="70px" width="100px"> </td>
                        <td> {{$ex->category_name}} </td>


                        <td> <a href=" {{route('category.edit',$ex->id)}}" class="text-primary">Edit</a> </td>
                        <td> <form action=" {{route('category.destroy',$ex->id)}} " method="POST">
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
