<x-admin-layout>
    <x-slot:title>
        Show Services
    </x-slot>

    <div class="pagetitle">
        <h1>Services Table</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Show Services</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Services Table</h5>
                            <a href="{{ route('services.create') }}">
                                <button class="btn btn-success btn-md">Add Service</button>
                            </a>
                        </div>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th><b>ID</b></th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>About</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td><b>{{ $service->id }}</b></td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->icon }}</td>
                                        <td>{!! $service->about !!}</td>
                                        <td>
                                            <a href="{{ route('services.edit', $service->id) }}" class="text-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
