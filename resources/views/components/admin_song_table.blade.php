<table class="table table-striped">
 <thead>
  <tr>
   <th>タイトル</th>
  </tr>
 </thead>
 @foreach ($songs as $song)
 <tr>
  <td class="align-middle">
   <a href="{{ route('admin.show',['id' => $song->id]) }}">
    {{ $song->title }}
   </a>
  </td>
  <td class="align-middle">
   <button onclick="return confirm('本当に削除しますか？')" id="removeList" data-id="{{ $song->id }}"
    class="btn btn-danger">削除</button>
  </td>
  <td class="align-middle">
   <form action="{{ route('admin.edit',['id' => $song->id]) }}" class="mt-3" method="GET">
    {{ csrf_field() }}
    <button class="btn btn-success">更新</button>
   </form>
  </td>
 </tr>
 @endforeach
</table>