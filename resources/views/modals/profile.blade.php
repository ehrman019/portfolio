<x-modal>
  <x-slot name="title">Profile</x-slot>
  <x-slot name="data">profile</x-slot>
  <div class="modal-content-item">
    <p class="modal-title">個人データ</p>
    <ul class="modal-text-list modal-text-back">
      <li>名前: 大西 理代（おおにし りよ）</li>
      <li>生年月日: 1991年11月11日</li>
      <li>血液型: A型</li>
      <li>長所: 根気がある 共感力 好奇心旺盛 </li>
    </ul>
  </div>
  <div class="modal-content-item">
    <p class="modal-title">経歴</p>
    <ul class="modal-text-list modal-text-back">
      <li><span class="modal-text-list-width">2017年2月-2019年12月</span> <span>スタイルファクトリー株式会社</span><span class="">（正社員/物流倉庫の現場社員）</span></li>
      <li><span class="modal-text-list-width">2020年1月-2020年9月</span> <span>スタイルファクトリー株式会社</span><span>（正社員/事務・総務・経理）</span></li>
    </ul>
  </div>
  <div class="modal-content-item">
    <p class="modal-title">趣味など</p>
    <div class="modal-text modal-text-back">
      <p><span class="modal-text-title">YouTubeなどの動画視聴</span>YouTubeは毎日の癒しです！エンタメ系から情報収集、音楽など色々見ています。ほかにはNetflixやAmazonPrimeなどでアニメや映画を見るのが好きです。<br>好きなYouTubeチャンネル：QuizKnock、あさぎーにょさん など</p>
      <p><span class="modal-text-title">映画鑑賞</span>動画配信されている映画を自宅で観ることが多いですが、映画館も好きです! ジャンル関係なく興味の持った映画を観ています。好きな映画はいろいろありますが、インターステラーという映画が好きです。</p>
      <ul class="modal-profile-images">
        <li>
          <img src="{{ asset('img/cinema.jpg') }}" alt="">
          <p>Filmarksやってます!</p>
        </li>
      </ul>

      <p><span class="modal-text-title">手芸</span>子供のころから何かを作ることが好きで、小さい頃は折り紙や工作をよくしていました。現在は編み物（かぎ針編み）や、クラフトバンドという紙製の帯を編んでかごを作る事などをよくしています。</p>
      <ul class="modal-profile-images">
        <li>
          <img src="{{ asset('img/chiikawa.jpg') }}" alt="">
          <p>ちいかわのあみぐるみ</p>
        </li>
        <li>
          <img src="{{ asset('img/basket.jpg') }}" alt="">
          <p>クラフトバンドのかご</p>
        </li>

      </ul>

      <p><span class="modal-text-title">運動・筋トレ</span>だいたいはYouTube動画をみながらマイペースに週2回程度行っています。昨年の7月から続いています！BURN.FITというアプリで記録ををつけていて、ベーシックな筋トレからYouTubeの運動動画までトレーニング記録として登録できるのでおすすめです。その他スポーツやウォーキングなど体を動かすことは結構好きです！</p>
    </div>
  </div>
</x-modal>