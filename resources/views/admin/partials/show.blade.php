    <div class="row">
        <div class="col-12">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Type</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                {{-- @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic["id"]}}</th>
                    <th scope="row">
                        <a href="{{route("comics.show", $comic["id"])}}">
                            {{$comic["title"]}}
                        </a>
                    </th>
                    <th scope="row">{{$comic["description"]}}</th>
                    <th scope="row">{{$comic["price"]}}</th>
                    <th scope="row">{{$comic["series"]}}</th>
                    <th scope="row">{{$comic["type"]}}</th>
                    <th scope="row">{{$comic["sale_date"]}}</th>
                    <td>
                       
                        <a href="{{route("comics.show", $comic["id"])}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a>
                            <i class="fas fa-edit"></i>
                        </a>

                        <form method="POST" action="{{ route('comics.destroy', $comic["id"]) }}">

                            @csrf

                            <input name="_method" type="hidden" value="DELETE">

                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>

                        </form>

                    </td>
                </tr>

                @endforeach --}}
            </table>
        </div>
    </div>
