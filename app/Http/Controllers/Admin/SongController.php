<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Requests\CreateSongTask;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
 /**
  * Create a new controller instance.
  *
  * @return void
  */
 public function __construct()
 {
  $this->middleware('auth:admin');
 }

 /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
 public function create(Request $request)
 {
  $search = $request->input('search');
  $songs = DB::table('songs');
  $songs->orderBy('created_at', 'desc');
  $songs = $songs->paginate(10);

  // 検索処理
  if ($search) {
   $songs = DB::table('songs')
    ->where('title', 'like', '%' . $search . '%')->orWhere('detail', 'like', '%' . $search . '%')
    ->orderBy('created_at', 'desc')->paginate(10);
  }

  $tags = Tag::pluck('title', 'id')->toArray();
  // dd($tags);
  return view('admin.create', [
   'songs' => $songs,
   'tags' => $tags
  ]);
 }

 public function store(CreateSongTask $request, Song $song)
 {
  // 歌詞の登録処理
  // save()の方が、自由にテーブルに挿入するタイミングを決めることができて便利かも
  $song = Song::create([
   'title' => $request->input('title'),
   'detail' => $request->input('detail'),
   'file_name' => $request->file_name ? $request->file('file_name')->getClientOriginalName() : ''
  ]);

  // 歌詞にタグをつける処理
  $request_tags = $request->input('tags');
  if ($request_tags) {
   // クエリビルダでDB::table('song_tag')みたいな感じで中間テーブルに値を入れることもできる
   // Song::create()->tags()みたいな書き方もできるんだ〜〜
   //DB::enableQueryLog();
   //foreach ($request_tags as $tag) {
   // $song->tags()->attach($tag);
   //}
   $song->tags()->sync($request->tags);
   //dd(DB::getQueryLog());
  }


  // アップロードファイルの保存処理
  if ($request->file_name) {
   //$request->file('file_name')->storeAs('public/img', $request->file('file_name')->getClientOriginalName(), 's3');
   Storage::putFile('file_name', new File('/public/img'));
  }

  return redirect()->route('admin.create')->with([
   'success' => 'ファイルを保存しました',
  ]);
 }

 public function show($id)
 {
  $song = Song::find($id);

  return view('admin.show', [
   'song' => $song
  ]);
 }

 public function edit(Request $request)
 {
  //$song = Song::find($id);
  $song = Song::where('id', $request->id)->first();
  $song->load('tags');
  $tags = Tag::pluck('title', 'id')->toArray();
  return view('admin.edit', compact('song', 'tags'));
 }

 public function update(CreateSongTask $request, $id)
 {
  $song = Song::find($id);

  //$song = Song::find($id)->update([
  // 'title' => $request->input('title'),
  // 'detail' => $request->input('detail'),
  // 'file_name' => $request->file_name ? $request->file('file_name')->getClientOriginalName() : ''
  //]);
  $song->title = $request->input('title');
  $song->detail = $request->input('detail');
  $song->file_name = $request->file_name ? $request->file('file_name')->getClientOriginalName() : '';


  $request_tags = $request->input('tags');
  if ($request_tags) {
   DB::enableQueryLog();
   $song->tags()->sync($request->tags);
   DB::getQueryLog();
  }

  $song->save();
  // dd($song);
  // ここから画像編集機能
  if ($request->file_name) {
   $request->file('file_name')->storeAs('public/img', $request->file('file_name')->getClientOriginalName());
  }

  return redirect()->route('admin.create');
 }

 public function destroy($id)
 {
  $song = Song::find($id);
  // dd($song);
  $song->delete();

  return redirect()->route('admin.create');
 }

 public function userList()
 {
  return view('admin.userList');
 }
}
