<div class="container">
    <div class="row">
        <div class="col-10">
            <h3>Update Task</h3>
            <form action="{{ route('tasks.update', $task->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="row">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" id="title" name="name"
                               value="{{ $task->name }}" required>
                    </div>
                    <div class="row">
                        <label for="title">Description</label>
                        <input type="text" class="form-control" id="title" name="description"
                               value="{{ $task->description }}" required>
                    </div>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>
