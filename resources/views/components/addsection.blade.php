<x-admin-layout>
    <x-slot:title>
        Add Section
    </x-slot>

    <div class="pagetitle">
        <h1>Section Form</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add Section</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Section</h5>
                        <form action="{{ route('section.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="about" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-10">
                                    <textarea id="about" name="about" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="s_name" class="col-sm-2 col-form-label">Section Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="s_name" class="form-control @error('s_name') is-invalid @enderror" id="s_name">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
