<x-admin-layout>
    <x-slot:title>
        Show Sections
    </x-slot>

    <div class="pagetitle">
        <h1>Section Table</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Show Sections</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Section Table</h5>
                            <a href="{{ route('section.create') }}">
                                <button class="btn btn-success btn-md">Add Section</button>
                            </a>
                        </div>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>About</th>
                                    <th>User ID</th>
                                    <th>Section Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                    <tr>
                                        <td>{{ $section->id }}</td>
                                        <td>{{ $section->title }}</td>
                                        <td>{!! $section->about !!}</td>
                                        <td>{{ $section->user_id }}</td>
                                        <td>{{ $section->s_name }}</td>
                                        <td>
                                            <a href="{{ route('section.edit', $section->id) }}" class="text-primary">Edit</a>
                                            <form action="{{ route('section.destroy', $section->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
