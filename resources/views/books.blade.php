<tbody>
    <?php $i = 1; ?>
        @foreach($books as $book)
        <tr>
            <td class="text-center">{{$loop->iteration}}</td>
            <td>{{$book->nama_buku}}</td>
            <td>{{$book->tipe_buku}}</td>
            <td class="text-center">{{$book->stock_buku}}</td>
            <td>{{$book->penulis}}</td>
            <td>{{$book->penerbit}}</td>
            <td class="text-center">{{$book->tanggal_terbit}}</td>
            <td>
                <a href="{{url('/edit')}" class="btn btn-xs btn-primary">Edit</a> |
                <a href="#" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
            </td>
        </tr>
        @endforeach
</tbody>