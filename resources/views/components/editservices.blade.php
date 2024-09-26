<x-admin-layout>
    <x-slot:title>
        Edit Service
    </x-slot>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Service</h5>
                        <form action="{{ route('services.update', $service->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Service Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $service->name }}" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ $service->icon }}" name="icon" class="form-control @error('icon') is-invalid @enderror" id="icon">
                                    <span class="text-danger">@error('icon') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="about" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-10">
                                    <textarea name="about" class="form-control @error('about') is-invalid @enderror" id="about" rows="4">{{ $service->about }}</textarea>
                                    <span class="text-danger">@error('about') {{ $message }} @enderror</span>
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
