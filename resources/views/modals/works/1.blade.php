<x-modal>
  <x-slot name="title">Works</x-slot>
  <x-slot name="data">works1</x-slot>
  <h4>ECサイト（架空）- ZACCA</h4>
  <div class="modal-content-item">
    <p class="modal-title">概要</p>
    <div class="modal-text modal-text-icon">
      <p>雑貨（主にアクセサリーやインテリア雑貨など）の架空通販サイトになります。</p>
    </div>

  </div>
  <div class="modal-content-item">
    <p class="modal-title">実装機能</p>
    <ul class="list-tag modal-list-tag">
      <li>新規登録</li>
      <li>ログイン</li>
      <li>バリデーション</li>
      <li>お気に入り登録</li>
      <li>カートの保持</li>
      <li>注文履歴の保持</li>
      <li>商品の絞り込み検索</li>
      <li>お問い合わせ</li>
      <li>自動返信メール</li>
      <li>商品情報登録・編集</li>
      <li>画像アップロード</li>
      <li>入荷登録</li>
    </ul>
    <ul class="modal-works-links">
      <li><a href="https://zacca.jeez.jp" target="_blank">TopPage <i class="fa-solid fa-up-right-from-square"></i> </a></li>
      <li><a href="https://zacca.jeez.jp/admin" target="_blank">Admin <i class="fa-solid fa-up-right-from-square"></i> </a></li>
    </ul>
  </div>
  <div class="modal-content-item">
    <p class="modal-title">制作期間</p>
    <ul class="modal-works-list">
      <li>
        <div>
          <i class="fa-brands fa-figma"></i>
        </div>
        <p>デザイン </br>約1カ月</p>
        <span>2023年11月<br>-2023年12月</span>
      </li>
      <li>
        <div>
          <i class="fa-brands fa-html5"></i>
          <i class="fa-brands fa-css3"></i>
          <i class="fa-brands fa-js"></i>
        </div>
        <p>コーディング <br>約1カ月半</p>
        <span>2023年12月<br>-2024年1月</span>
      </li>
      <li>
        <div>
          <i class="fa-brands fa-php"></i>
          <i class="fa-brands fa-js"></i>
        </div>
        <p>システム <br>約1カ月半</p>
        <span>2024年3月<br>-2024年4月</span>
      </li>
    </ul>
  </div>

  <div class="modal-content-item">
    <p class="modal-title">制作のポイント</p>
    <div class="modal-text modal-text-icon">
      <p>HTML,CSS,JavaScript,Figmaをひと通り学んだのち、初めていちから作成したサイトになります。最初ということもあり、自身が興味を持てそうなサイトにデザインしました。ペルソナやコンセプトなどは下記のFigmaデータをご参照いただけますと幸いです。</p>
      <p>コーディングに関しましては、ただデザインを再現するだけでなく、見やすさ、ほかの方が見ても分かりやすくなるように心がけました。また無駄な部分や回りくどい部分が極力ないように、適宜リファクタリングしながら行いました。</p>
      <p>システムに関しましては、コーディング完了の後1か月書籍等でPHPを勉強してから取り組みました。もともと他言語の経験があり、スムーズに取り組めました。また、画面遷移をしないようサーバへの送信をJavaScriptのfetchAPIで行うなど、自分にとって新しい方法を自主的に調べながら実装を行いました。</p>
    </div>
  </div>
  <div class="modal-content-item">
    <p class="modal-title">ダウンロードデータ</p>
    <div class="modal-text">
      <p><a href="{{ asset('/figma/figma-ec.fig') }}" download="Figma-ec-riyo-onishi.fig"><i class="fa-solid fa-file-arrow-down"></i>Figmaデータ</a></p>
    </div>
  </div>
</x-modal>