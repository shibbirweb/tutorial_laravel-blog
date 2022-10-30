<x-app-layout>
    <div class="row mt-4">
        <div class="col-12">
            <div class="text-end">
                <a href="{{ route('dashboard.post.index') }}" class="btn btn-sm btn-primary">Back to list</a>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="card mb-3">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text">
                        <small class="text-muted">
                            Last updated {{ $post->updated_at->diffForHumans() }}
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
