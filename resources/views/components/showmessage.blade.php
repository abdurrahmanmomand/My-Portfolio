<x-admin-layout>
    <x-slot:title>
        Show Messages
    </x-slot>


    <div class="pagetitle">
      <h1>Messages Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Messages Table</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Messages Table</h5>
                </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>id</b>

                    </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                   <th>Time</th>
                    <th>Action</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                        <td> <b>{{$message->id}}</b> </td>
                        <td> {{$message->name}} </td>
                        <td> {{$message->email}} </td>
                        <td> {{$message->subject}} </td>

                        <td> {{$message->created_at}} </td>
                        <td>

                        @if ($message->status==0)
                        <a href=" {{route('message.show',["message"=>$message->id])}} "> <button class="btn btn-danger btn-sm">Unread</button> </a>

                        @else
                        <button class="btn btn-success btn-sm">Seen</button>
                        @endif
                        </td>w
                        <td> <form action=" {{route('message.destroy',["message"=>$message->id])}} " method="POST">
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
