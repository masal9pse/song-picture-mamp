<form method="GET" action="{{ route('songs.index') }}" class="form-inline my-2 my-lg-0">
 <input class="form-control" name="search" type="search" placeholder="タイトル·歌詞·コメントで検索" aria-label="Search">
 <button class="btn btn-success my-2 my-sm-0" type="submit">検索する</button>
 <a href="{{ route('admin.create')}}" class="btn btn-danger">管理画面へ移動(通常は存在しません)</a>
</form>