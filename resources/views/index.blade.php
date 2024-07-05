@extends('layouts.base')
@section('title','Portfolio | Riyo Onishi')
@section('modals')
@include('modals.profile')
@include('modals.skills')
@include('modals.certifications')
@include('modals.works.1')
@include('modals.works.2')
@endsection
@section('mv')
<div class="MV" id="MV">
  <div class="MV-1">
    <div class="MV-2">
      <div class="MV-title">
        <strong>
          <span>R</span>iyo <span>O</span>nishi's <span>P</span>ortfolio
        </strong>
      </div>
      <p>- Web Engineer -</p>
    </div>
  </div>
</div>
@endsection
@section('main')
<section class="profile" id="profile">
  <h1>Profile</h1>
  <div class="content">
    <div class="profile-flex">
      <div class="profile-img">
        <div class="profile-img-content">
          <figure>
            <img src="{{ asset('img/myimage.jpg') }}" alt="" />
          </figure>
        </div>
        <h2>大西 理代</h2>
      </div>
      <div class="content-text profile-content-text">
        <p>千葉県船橋市出身。</p>
        <p>
          2022年までプログラミング未経験でしたが、独学でPythonやC++を学び、Excelの自動化や簡易的なGUIの作成、競技プログラミング（AtCoder）に参加するなどをしておりました。
          2023年9月から就労移行事業所でHTML,CSS,JavaScriptと、デザインのIllustrator,Photoshop,Figmaを学び、半年ほどでオリジナルのサイトを作成しました。
        </p>
        <p>新しいことに挑戦する意欲や、目標まで遂行する能力や根気、スピードが私の強みです。
          よろしくお願いいたします。</p>
        <button type="button" class="button" data-open-modal="profile">More</button>

      </div>
    </div>

  </div>
</section>
</div>
</section>

<section class="skills" id="skills">
  <h1>Skills</h1>
  <div class="content content-two-col">
    <ul class="content-list content-two-col-list">
      <li>
        <h2>スキルセット</h2>
        <div class="list-style-flex skills-content">
          <ul class="list-style">
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
          </ul>
          <ul class="list-style">
            <li>WordPress</li>
            <li>Figma</li>
            <li>Illustrator</li>
            <li>Photoshop</li>
          </ul>
        </div>
        <button type="button" class="button" data-open-modal="skills">More</button>
      </li>
      <li>
        <h2>保有資格</h2>
        <div class="list-style-flex  skills-content">
          <ul class="list-style">
            <li>基本情報技術者</li>
            <li>ACP Illustrator</li>
            <li>ACP Photoshop</li>
            <li>日商簿記検定試験2級</li>
          </ul>
        </div>
        <button type="button" class="button" data-open-modal="certifications">More</button>
      </li>
    </ul>
  </div>
</section>

<section class="works" id="works">
  <h1>Works</h1>
  <div class="content content-two-col">
    <ul class="content-list content-two-col-list">
      <li>
        <h2>ECサイト（架空）</h2>
        <div class="works-content">
          <a href="https://zacca.jeez.jp" target="_blank">
            <img src="{{ asset('img/ec.jpg') }}" alt="ECサイト（架空）">
          </a>
          <div class="works-description">
            <p>
              <a href="https://zacca.jeez.jp" target="_blank">TopPage <i class="fa-solid fa-up-right-from-square"></i></a>
            </p>
            <p>実装機能:<br>ログイン・自動返信メール・画像アップロードなど</p>

            <ul class="list-tag">
              <li>PHP</li>
              <li>JavaScript</li>
              <li>HTML</li>
              <li>CSS</li>
              <li>Design</li>
              <li>Coding</li>
              <li>Programming</li>
            </ul>

          </div>
        </div>
        <button type="button" class="button" data-open-modal="works1">More</button>
      </li>
      <li>
        <h2>ポートフォリオサイト</h2>
        <div class="works-content">
          <a href="https://portfolio-ronishi.com" target="_blank">
            <img src="{{ asset('img/portfolio.jpg') }}" alt="ポートフォリオサイト">
          </a>
          <div class="works-description">
            <p>
              <a href="https://portfolio-ronishi.com" target="_blank">TopPage <i class="fa-solid fa-up-right-from-square"></i></a>
            </p>
            <p>こちらのサイトのご紹介となります。</p>
            <ul class="list-tag">
              <li>Laravel</li>
              <li>PHP</li>
              <li>JavaScript</li>
              <li>HTML</li>
              <li>CSS</li>
              <li>Design</li>
              <li>Coding</li>
              <li>Programming</li>
            </ul>
          </div>
        </div>
        <button type="button" class="button" data-open-modal="works2">More</button>
      </li>
    </ul>
  </div>
</section>

<section class="contact" id="contact">
  <h1>Contact</h1>
  <p class="contact-email">
  </p>
  <div class="contact-content">
    <form action="" method="post" id="contact-form">
      @csrf
      <div class="contact-border">
        <div class="contact-list">
          <i class="fa-solid fa-user-check"></i>
          <input type="text" name="name" placeholder="お名前" value="" autocomplete="off" />
        </div>
        <div class="contact-list">
          <i class="fa-solid fa-envelope"></i>
          <input type="text" name="email" placeholder="メールアドレス" value="" autocomplete="off" />
        </div>
        <div class="contact-list">
          <textarea name="comment" id="" cols="30" rows="10" placeholder="お問い合わせ内容" autocomplete="off"></textarea>
        </div>
      </div>
      <div class="contact-submit">
        <div class="contact-submit-button">
          <button type="submit" class="contact-submit-icon" id="contact-submit"><i class="fa-solid fa-paper-plane"></i></button>
          <p>送信する</p>
        </div>
        <p id="contact-submit-result"></p>
      </div>

    </form>
  </div>
</section>
@endsection
