@section('title', 'Post list')
@section('page_name', 'Post')

<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List</h3>

            <div class="card-tools">
                TODO Search Options
            </div>
        </div>
        <!-- /.card-header -->
        @if ($posts->count())
            <div class="card-body p-0">
                <table class="table-hover table-striped table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Published At</th>
                            <th class="text-center">Created At</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $posts->firstItem() + $loop->index }}</td>
                                <td>{{ $post->title }}</td>
                                <td class="text-center">
                                    <span @class([
                                        'badge',
                                        'badge-warning' => !$post->isPublished(),
                                        'badge-success' => $post->isPublished(),
                                    ])>
                                        @if (!$post->isPublished())
                                            Not
                                        @endif
                                        Published
                                    </span>
                                </td>
                                <td class="text-center">
                                    {{ $post->published_at?->format('d-F-Y') }}
                                </td>
                                <td class="text-center">
                                    {{ $post->created_at?->format('d-F-Y') }}
                                </td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default">Show</a>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu" style="">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="card-footer">
            @unless($post->count())
                <div class="text-center">You have not posted yet</div>
            @endunless

            <div class="float-right">
                {{ $posts->links() }}
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</x-app-layout>
