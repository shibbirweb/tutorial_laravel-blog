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
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="Enter post title">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                        placeholder="Enter post content" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label class="mr-2" for="publish-now">Do you want to publish now?</label>
                    <input type="checkbox" name="my-checkbox" checked data-on-text="Yes" data-off-text="No"
                        data-bootstrap-switch data-off-color="danger" data-on-color="success" id="publish-now">
                </div>
                {{--
                    TODO: Next Class begin from here
                    --}}

                <div class="mb-3">
                    <label for="is-published" class="form-label">Do you want to publish now?</label>
                    <select class="form-select @error('is_published') is-invalid @enderror" id="is-published "
                        name="is_published">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    {{-- <x-common.form-validation-error-message name="is_published" /> --}}
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <!-- /.card-footer -->
        </form>

    </div>
</x-app-layout>
