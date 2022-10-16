<x-app-layout>
    <div class="row">
        <div class="col-12">
            <h1>Welcome to post list</h1>

            <div class="my-4 text-end">
                <a href="{{ route('dashboard.post.create')  }}" class="btn btn-primary">Add new Post</a>
            </div>
        </div>
    </div>
    <div>
        <form action="{{ route('dashboard.post.index') }}" method="GET">
            <select name="orderBy" class="form-control form-control-sm">
                <option value="latest" @selected(request('orderBy')==='latest' )>Latest</option>
                <option value="oldest" @selected(request('orderBy')==='oldest' )>Oldest</option>
            </select>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </form>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach($posts as $post)
        <div class="col">
            <div class="card h-100">
                {{--TODO <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <div>
                        <p class="text-end">
                            <span @class([ 'badge' , 'text-bg-warning'=> $post->published_at == null, 'text-bg-success'
                                => $post->published_at != null ])>
                                @if($post->published_at == null)
                                Not
                                @endif
                                Published
                            </span>
                        </p>
                    </div>
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated {{ $post->updated_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</x-app-layout>
