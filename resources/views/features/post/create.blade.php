<x-app-layout>
    <div class="row">
        <div class="col-12">
            <h1>Create new Post</h1>

            <div class="my-4 text-end">
                <a href="{{ route('dashboard.post.index')  }}" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </div>

    <form action="{{ route('dashboard.post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3"
                placeholder="Enter post content"></textarea>
        </div>
        <div class="mb-3">
            <label for="is-published" class="form-label">Do you want to publish now?</label>
            <select class="form-select" id="is-published" name="is_published">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-app-layout>
