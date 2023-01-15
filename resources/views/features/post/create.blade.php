<x-app-layout>
    <div class="card">
        <form action="{{ route('dashboard.post.store') }}" method="post">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Create</h3>

                <div class="card-tools">
                    <a href="{{ route('dashboard.post.index') }}" class="btn btn-primary btn-sm">Back to list</a>
                </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <x-form.input id="title" name="title" placeholder="Enter post title"
                        value="{{ old('title') }}" />
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <x-form.input type="textarea" id="content" name="content" placeholder="Enter post content"
                        rows="3" value="{{ old('content') }}" />
                </div>

                <div class="form-group">
                    <label class="mr-2" for="publish-now">Do you want to publish now?</label>
                    <input type="checkbox" name="is_published" checked data-on-text="Yes" data-off-text="No"
                        value="1" data-bootstrap-switch data-off-color="danger" data-on-color="success"
                        id="publish-now">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <x-form.button>Save</x-button>
            </div>
            <!-- /.card-footer -->
        </form>

    </div>
</x-app-layout>
