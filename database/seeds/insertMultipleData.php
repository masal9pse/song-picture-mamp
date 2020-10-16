<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  // DB::table('songs')->truncate(); //一度入れたDBの値を固定する
  // define params
  $name_01 = 'tstTakimuto'; // たけむと
  $name_02 = 'tstTakimeto'; // たきめと
  $name_03 = 'tstTakimota'; // たきもた
  //$now = Carbon::now(); // 2017-07-26 02:11:22
  $now = now(); // 2017-07-26 02:11:22

  $datum = [
   ['title' => $name_01, 'detail' => $name_01, 'created_at' => $now, 'updated_at' => $now],
   ['title' => $name_02, 'detail' => $name_02, 'created_at' => $now, 'updated_at' => $now],
   ['title' => $name_03, 'detail' => $name_03, 'created_at' => $now, 'updated_at' => $now]
  ];
  DB::table('songs')->insert($datum);

  // DB::table('songs')->insert([
  //  'title' => 'ハレ晴レユカイ',
  //  'detail' => 'ナゾナゾみたいに地球儀を解き明かしたら
  //  みんなでどこまでも行けるね

  //  ワクワクしたいと願いながら過ごしてたよ
  //  かなえてくれたのは誰なの？

  //  時間の果てまでBoooon!!

  //  ワープでループなこの想いは
  //  何もかもを巻き込んだ想像で遊ぼう

  //  アル晴レタ日ノ事
  //  魔法以上のユカイが
  //  限りなく降りそそぐ　不可能じゃないわ
  //  明日また会うとき　笑いながらハミング
  //  嬉しさを集めよう
  //  カンタンなんだよ　こ・ん・な・の
  //  追いかけてね　つかまえてみて
  //  おおきな夢＆夢　スキでしょう？

  //  イロイロ予想が出来そうで出来ないミライ
  //  それでもひとつだけわかるよ

  //  キラキラ光って　厚い雲の上を飾る
  //  星たちが希望をくれると

  //  時間に乗ろうよByuuuuun!!
  //  チープでクールな年頃だもん
  //  さみしがっちゃ恥ずかしいよなんてね　言わせて

  //  手と手をつないだら
  //  向かうトコ無敵でしょ
  //  輝いた瞳には　不可能がないの
  //  上だけ見ていると　涙もかわいちゃう
  //  「変わりたい！」
  //  ココロから強く思うほど　つ・た・わ・る
  //  走り出すよ　後ろの人もおいでよ
  //  ドキドキッ するでしょう？

  //  Boooon!!

  //  ワープでループなこの想いは
  //  何もかもを巻き込んだ想像で遊ぼう

  //  アル晴レタ日ノ事
  //  魔法以上のユカイが
  //  限りなく降りそそぐ　不可能じゃないわ
  //  明日また会うとき　笑いながらハミング
  //  嬉しさを集めよう
  //  カンタンなんだよ　こ・ん・な・の
  //  追いかけてね　つかまえてみて
  //  おおきな夢＆夢　スキでしょう？',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => '愛をこめて花束を',
  //  'detail' => '二人で写真を撮ろう 懐かしいこの景色と
  //  あの日と同じポーズでおどけてみせて欲しい

  //  見上げる空の青さを気まぐれに雲は流れ
  //  キレイなものは遠くにあるからキレイなの

  //  約束したとおりあなたと
  //  ここに来られて本当に良かったわ
  //  この込み上がる気持ちが愛じゃないなら
  //  何が愛か分からないほど

  //  愛をこめて花束を 大袈裟だけど受け取って
  //  理由なんて訊かないでよね
  //  今だけすべて忘れて 笑わないで受けとめて
  //  照れていないで

  //  昨日とよく似た今日は何気ない分かれ道を
  //  分かって選びそびれた臆病のせいでしょう

  //  私は泣くのが得意で
  //  最初から慰めを当てにしてたわ
  //  何度も間違った道 選び続けて
  //  正しくここに戻って来たの

  //  巡り巡る時を超え いつもあなたの所へと
  //  この心 舞い戻ってゆく
  //  無理に描く理想より 笑い合える今日の方が
  //  ずっと幸せね

  //  violet, indigo, black and blue
  //  flame, yellow, purple, sky blue,
  //  pink, yellow green, ash, brown......
  //  あなたに贈る色は......?

  //  巡り巡る時を超え いつもあなたの所へと
  //  この心 舞い戻ってゆく
  //  ありがとうも言い出せずに甘えていた
  //  今日ここへ来るまでは

  //  愛をこめて花束を 大袈裟だけど受け取って
  //  理由なんて訊かないでね
  //  今だけすべて忘れて 笑わないで受けとめて
  //  本当の私を

  //  いつまでもそばにいて',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => '今夜このまま',
  //  'detail' => '苦いようで甘いようなこの泡に くぐらせる想いが弾ける 体は言う事を聞かない 「いかないで」って 走ってゆければいいのに 広いようで狭いようなこの場所は 言いたい事も喉に詰まる 体が帰りたいと嘆く 「いかないで」って 叫んでくれる人がいればなぁ 抜け出せない 抜けきれない よくある話じゃ終われない 簡単に冷める気もないから とりあえずアレ下さい 消えない想いは 軽く火照らせて飛ばして 指先から始まる何かに期待して 泳いでく 溺れてく 今夜はこのまま 泡の中で眠れたらなぁ',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => 'マリーゴールド',
  //  'detail' => '風の強さがちょっと 心を揺さぶりすぎて 真面目に見つめた 君が恋しい でんぐり返しの日々 可哀想なふりをして だらけてみたけど 希望の光は 目の前でずっと輝いている 幸せだ 麦わらの帽子の君が 揺れたマリーゴールドに似てる あれは空がまだ青い夏のこと 懐かしいと笑えたあの日の恋 「もう離れないで」と 泣きそうな目で見つめる君を 雲のような優しさでそっとぎゅっと 抱きしめて 抱きしめて 離さない',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => '紅蓮華',
  //  'detail' => '強くなれる理由を知った 僕を連れて　進め 泥だらけの走馬灯に酔う 強張る心　震える手は 掴みたいものがある それだけさ 夜の匂いに (I’ll spend all thirty nights) 空睨んでも (Staring into the sky) 変わっていけるのは　自分自身だけ それだけさ 強くなれる理由を知った 僕を連れて　進め どうしたって消せない夢も　止まれない今も 誰かのために強くなれるなら ありがとう　悲しみよ 世界に打ちのめされて　守る意味を知った 紅蓮の華よ　咲き誇れ 運命を照らして
  //  ',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => 'DADDY! DADDY! DO!',
  //  'detail' => 'DADDY! DADDY! DO! 欲しいのさ　あなたのすべてが 愛に抱かれ　ギラギラ燃えてしまいたい 可愛げなKISSで1・2・3 目線そらしてズルイよね 火照り出すボクの気持ち　もてあそぶみたいで 追いかけちゃ　ダメなのは　わかってる　でも無理さ 一度踏み出せば　戻れなくて　仮面は脱ぎ捨てて いけない言葉で　遊びが本気になる DADDY! DADDY! DO! 欲しいのさ　あなたのすべてが 騙されたら　それでもいい　もっと震わせて 魅せてくれ　僕だけに　笑顔の裏まで 愛に抱かれ　ギラギラ燃えてしまいたい 「あなただけ」と言うくちびるが 優しく微笑むたび　飲み込まれて　いざなわれて 未知の世界　触れて',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => '君はロックを聴かない',
  //  'detail' => '少し寂しそうな君に こんな歌を聴かせよう 手を叩く合図 雑なサプライズ 僕なりの精一杯 埃まみれ ドーナツ盤には あの日の夢が踊る 真面目に針を落とす 息を止めすぎたぜ さあ腰を下ろしてよ フツフツと鳴り出す青春の音 乾いたメロディで踊ろうよ 君はロックなんか聴かないと思いながら 少しでも僕に近づいてほしくて ロックなんか聴かないと思うけれども 僕はこんな歌であんな歌で 恋を乗り越えてきた',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => '',
  //  'detail' => '',
  //  'file_name' => ''
  // ]);

  // DB::table('songs')->insert([
  //  'title' => 'pretender',
  //  'detail' => '君とのラブストーリー それは予想通り いざ始まればひとり芝居だ ずっとそばにいたって 結局ただの観客だ 感情のないアイムソーリー それはいつも通り 慣れてしまえば悪くはないけど 君とのロマンスは人生柄 続きはしないことを知った もっと違う設定で もっと違う関係で 出会える世界線 選べたらよかった もっと違う性格で もっと違う価値観で 愛を伝えられたらいいな そう願っても無駄だから グッバイ 君の運命のヒトは僕じゃない 辛いけど否めない でも離れ難いのさ その髪に触れただけで 痛いや いやでも 甘いな いやいや グッバイ それじゃ僕にとって君は何？ 答えは分からない 分かりたくもないのさ たったひとつ確かなことがあるとするのならば 「君は綺麗だ」',
  //  'file_name' => ''
  // ]);
  // // factory(App\Models\Song::class, 50)->create();
 }
}
