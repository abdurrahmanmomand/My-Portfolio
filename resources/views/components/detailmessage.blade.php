<x-admin-layout>
    <x-slot:title>
        Show Messages
    </x-slot>


    <div class="pagetitle">
      <h1>Messages Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Messages Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Messages Details</h5>
                    <a href=" {{route('message.index')}} "> <button class="btn btn-primary btn-sm">Back</button> </a>
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
                    <th>Message</th>
                   <th>Time</th>
                   <th>Action</th>


                  </tr>
                </thead>
                <tbody>

                    <tr>
                        <td> <b>{{$message->id}}</b> </td>
                        <td> {{$message->name}} </td>
                        <td> {{$message->email}} </td>
                        <td> {{$message->subject}} </td>
                        <td>{{$message->message}}</td>
                        <td> {{$message->created_at}} </td>
                        <td>
                            <a class="text-primary" href="mailto:{{$message->email}}"> Reply </a>
                        </td>

                      </tr>



                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>


</x-admin-layout>
