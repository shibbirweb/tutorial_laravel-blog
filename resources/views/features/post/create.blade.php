<x-app-layout>
    <div class="card">
        <form action="{{ route('dashboard.post.store') }}" method="post">
            <div class="card-header">
                <h3 class="card-title">Create</h3>

                <div class="card-tools">
                    <a href="{{ route('dashboard.post.index') }}" class="btn btn-primary btn-sm">Back to list</a>
                </div>
            </div>
            <!-- /.card-header -->
            @csrf
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
                    <x-form.checkbox-switch :checked="old('is_published') == 1" name="is_published" id="publish-now" />
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <x-form.button>Save</x-button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</x-app-layout>
