<aside class="modal" data-modal="{{ $data }}">
  <div class="modal-front">
    <h3>{{ $title }}</h3>
    <div class="modal-content">
      {{ $slot }}
    </div>
    <button type="button" class="button modal-close-button" data-close-modal="{{ $data }}">close</button>
  </div>
</aside>