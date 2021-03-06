/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("./users");
window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component("user-component", require("./components/UserComponent.vue"));
Vue.component("book-component", require("./components/BookComponent.vue"));

Vue.component("like", require("./components/Like.vue"));

const app = new Vue({
 el: "#app",
});

$(function() {
 // 行の一部を変更する
 //$(document).on('click', '#removeList', function() {
 // //console.log($(this).data().id);
 // currentId = $(this).data().id;
 // fetch('/api/posts/' + currentId + '/delete', {
 //  //method: 'DELETE',
 //  method: 'POST',
 //  body: {},
 // })
 //  .then(() => {
 //   $(this)
 //    .parent()
 //    .parent()
 //    .remove();
 //  })
 //});

 $('#removeList').click(function() {
  //console.log($(this).data().id);
  currentId = $(this).data().id;
  fetch('/api/posts/' + currentId + '/delete', {
   method: 'POST',
   body: {
    id: currentId
   },
  })
   .then(() => {
    $(this)
     .parent()
     .parent()
     .remove();
   })
 });

 // フロントだけでとりあえず投稿するとフォームが消える処理を書く
 //$('#store-data').click(function() {
 // $('#title-data').val('')
 // $('#detail-data').val('')
 // $('#image-data').val('')
 // // https://www.s-arcana.co.jp/tech/2014/04/jqueryid.html
 // // 同じidを持つ複数要素を選択するやり方
 // $("[id=tag-data]").removeAttr("checked").prop('checked', false).change()
 //})

 //$("#image-data").change(function() {
 // var value = this.value;
 // //console.log(value);
 //});
 $('#store-data').click(function() {
  console.log($("[name=title]").val());
  console.log($("[name=detail]").val());
  console.log($("input[type=file]").val());
  $('#title-data').val('')
  $('#detail-data').val('')
  $('#image-data').val('')
 })
 //// あとでフロントとバックを紐づけるためのajaxのフォーマット
 //$('#store-data').click(function() {
 // $.ajax({
 //  //POST通信
 //  type: "POST",
 //  //ここでデータの送信先URLを指定します。
 //  url: "/api/posts/store",
 //  data: {
 //   title: $("[name=title]").val(),
 //   detail: $("[name=detail]").val(),
 //   //file_name: $("#image-data [type=file]").val(),
 //   file_name: $("input[type=file]").val()
 //  },
 //  //処理が成功したら
 //  success: function() {
 //   //HTMLファイル内の該当箇所にレスポンスデータを追加する場合
 //   console.log($("[name=title]").val());
 //   console.log($("[name=detail]").val());
 //   //console.log($("#image-data [type=file]").val());
 //   console.log($("input[type=file]").value);
 //   $('#title-data').val('')
 //   $('#detail-data').val('')
 //   $('#image-data').val('')
 //   // https://www.s-arcana.co.jp/tech/2014/04/jqueryid.html
 //   // 同じidを持つ複数要素を選択するやり方
 //   $("[id=tag-data]").removeAttr("checked").prop('checked', false).change()
 //  },
 //  error: function() {
 //   alert('通信エラー');
 //  }
 // });
 //})
 ////submitによる画面リロードを防いでいます。
 //return false;
});