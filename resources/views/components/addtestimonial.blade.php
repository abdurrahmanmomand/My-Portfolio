<x-admin-layout>
    <x-slot:title>
        Add Testimonial
    </x-slot>

    <div class="pagetitle">
        <h1>Add Testimonial</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add Testimonial</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Testimonial</h5>

                        <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" required>
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="inputImage" required>
                                    <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputAbout" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-10">
                                    <textarea name="about" class="form-control @error('about') is-invalid @enderror" id="inputAbout" rows="3" required></textarea>
                                    <span class="text-danger">@error('about') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputJob" class="col-sm-2 col-form-label">Job Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="job" class="form-control @error('job') is-invalid @enderror" id="inputJob" required>
                                    <span class="text-danger">@error('job') {{ $message }} @enderror</span>
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
