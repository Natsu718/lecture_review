<p align="center"><a href="https://lecturereview-8806b1ca4f86.herokuapp.com/" target="_blank"><img src="public/img/WLogo.jpg" width="100"></a></p>
<h1 align="center">早稲田講義レビュー</h1>



## 制作背景

大学入学前いきなり与えられた履修登録という試練.どんな授業を取るとよいか,何限に取るのがおすすめかについてはSNS上で知ることができたがシラバスを見てもどの講義が面白いのかよくわからない.実は大学3年生になってもわからないままだったのです.友人から聞くように他の人が講義を受けて思ったことを共有できたらなと思って制作しました.

<b>講義を取ってよかった</b>と思える人が増えればいいなと思います.


## 概要
「数学の課題がメインの講義ないかなー」なんてなんとなく分野は決まってるけどその講義の進め方がどうなってるかわからないという人へ
早稲田講義レビューでは
<a href="https://lecturereview-8806b1ca4f86.herokuapp.com/" target="_blank">アプリへGO</a>
## Laravel Sponsors
<b>使用言語：</b>
- PHP8
- Laravel9
- HTML
- CSS
- Tailwind
  
<b>開発環境：</b>
- Cloud9
- MariaDB
- GitHub
- Git

<b>デプロイ：</b>
- Heroku

## データ構成
<b>テーブル構成・リレーション</b>
<br>
<img src="public/img/ER図.png" width="400">
<br>
<b>各テーブル詳細</b>
<br>
<img src="public/img/テーブル詳細.png" width="700">

##  機能
- ログイン機能
- ユーザー新規登録機能（ユーザーネーム、学部、パスワード）
- シラバス検索ページへの遷移
- 講義へのレビュー投稿機能（成績の評価方法、コメント、５段階評価機能つける）
- 同じ分野コードの一覧表示
- 投稿の編集機能
- おすすめの平均表示
- 管理者ページを作成し、教授、講義を誤登録してしまった際に削除できるようにする（すでに投稿をしてしまっている授業は削除すると困るのでuser_id=1の管理者のみが削除可能とする）



## こだわり

直観的に操作がわかるよう最低限の情報を一覧表示するようにしている.

https://github.com/Natsu718/lecture_review/assets/130198298/cc124681-10b2-420c-afc0-66f0777c290e

https://github.com/Natsu718/lecture_review/assets/130198298/7eb15a17-e93b-4c70-9200-9f3e30164370

<br>
<br>
また全ての講義をシーダーファイルで入れることが困難なため講義に対して初めてレビューを書く人に授業作成をしてもらうようにしています.その際間違えて登録をしてしまった場合,レビューまで投稿されていると講義や教授を消した際に困るため管理者ページのみで削除可能な設計になっています.

https://github.com/Natsu718/lecture_review/assets/130198298/25b1e173-1d5e-4037-bb97-a011ec6cb7ff

## 使い方
（上の動画を合わせてみてください）<br>
<b>レビューの検索</b><br>
科目名の一部,またはプルダウンで学部を選択し,検索ボタンを押しましょう.該当する講義が並びます.おすすめ度が0以外ならばレビューがあるので科目名をクリックしてレビューの一覧をみてみましょう。

<b>レビューの投稿</b><br>
もし講義を受け終わったらぜひレビューを投稿しましょう.受けた講義を検索していてください.もし見つらないときは授業を作成をクリック.表示に従ってシラバス通りに講義を登録してください.スペース/英数字は半角で入れましょう.<br>
講義ができたらいよいよレビュー投稿です。科目名をクリックして成績評価方法,コメント,おすすめ度を入力し登録をしましょう.<br>
投稿できたか不安なときは「投稿したレビュー一覧」をチェックしてみてくださいね.



## 今後の計画


## 制作者連絡先
natsu3@akane.waseda.jp
