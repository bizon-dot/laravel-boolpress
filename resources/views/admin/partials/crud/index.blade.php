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
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                @foreach ($posts ?? '' as $post)
                <tbody>
                    <tr>
                        <th scope="row">
                         <a href="{{route('admin.posts.show', $post->id)}}">   {{ $post->id }} </a>
                        </th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ ($post->is_published) ? 'post' : 'draft' }}</td>

                        <td style="display:flex; gap: 5px;">
                           
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger" onclick="confirm()"><i
                                    class="fas fa-trash-alt"></i></button>

                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        function confirm() {
            Swal.fire({
                title: 'Do you want to save the changes?',
                text: "You won't be able to revert this!",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Delete',
                denyButtonText: `Don't delete`,
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete('/admin/posts/' + {{ $post->id }})
                        .then(function (response) {
                            Swal.fire('Saved!', '', 'success')
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error.response.data);
                        });
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        }
    </script>
