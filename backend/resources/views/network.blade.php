@extends('templates.template')

@section('content')
  <body>
    <h1>ネットワーク</h1>
    <h2>Laravel Tips</h2>
    backendフォルダ内の権限を777にしないとlogのエラーが起きる</br>
    git clone してもvendorフォルダ（laravel本体）はコピーされないのでappコンテナでcomposer installする</br>
    7.0と8.0でrouteの書き方が違うので注意</br>
    viewはextendで継承、includeで埋め込み
    <h2>設定用ファイル</h2>
    <a href="files/containers.tar.gz" download>お家docker用のファイル</a><br>
    ※パス工事中
    <h2>ネットワーク構成図</h2>
    <img src="images/home-network.png"></br>
    この構成図はpythonの
    <a href="https://diagrams.mingrammer.com/" target="_blank" rel="noopener noreferrer">Diagrams</a>
    というAPIを用いて作っている。定義したノード同士を - や >> で結ぶだけなので
    超簡単に構成図が作れる。
 
  </body>
@endsection