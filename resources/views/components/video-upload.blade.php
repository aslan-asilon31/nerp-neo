@props(['videoUrl' => null])

<div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = false"
  x-on:livewire-upload-cancel="uploading = false" x-on:livewire-upload-error="uploading = false"
  x-on:livewire-upload-progress="progress = $event.detail.progress">

  <x-input type="file" {{ $attributes }} />

  <div x-show="uploading">
    <progress max="100" x-bind:value="progress"></progress>
  </div>
</div>
