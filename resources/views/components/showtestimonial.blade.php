<x-admin-layout>
    <x-slot:title>
        Show Testimonials
    </x-slot>

    <div class="pagetitle">
        <h1>Testimonials Table</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Show Testimonials</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Testimonials Table</h5>
                            <a href="{{ route('testimonial.create') }}"><button class="btn btn-success btn-md">Add Testimonial</button></a>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th><b>ID</b></th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>About</th>
                                    <th>Job</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td><b>{{ $testimonial->id }}</b></td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td><img src="{{ asset('/storage/' . $testimonial->image) }}" height="70px" width="100px"></td>
                                        <td>{{ $testimonial->about }}</td>
                                        <td>{{ $testimonial->job }}</td>
                                        <td>
                                            <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="text-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
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
