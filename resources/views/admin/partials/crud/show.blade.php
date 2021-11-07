    <div class="row">
        <div class="col-12">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Content</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                @foreach ($posts as $post)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->slug }}</td>                            
                            <td style="display:flex;">
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                              </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
