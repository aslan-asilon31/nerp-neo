{{-- @if ($imageUrl)
  <x-label for="masterForm.image_url">
    <div class="my-2 flex justify-center border py-4">
      <div class="w-1/3 border">
        <x-button wire:click.debounce.500ms="removeImageUrl" wire:confirm="Do you want to remove this image?" negative
          label="Remove Image" rounded="false" class="w-full" />
        <img src="{{ $isTemporaryUrl ? $imageUrl->temporaryUrl() : $imageUrl }}" alt="Temporary image" />
      </div>
    </div>
  </x-label>
@endif --}}

@props(['fnRemoveImageUrl' => 'removeImageUrl'])

@if ($imageUrl)
  <x-label for="masterForm.image_url">
    <div class="my-2 flex justify-center border">
      <div class="border">
        <x-button wire:click.debounce.500ms="{{ $fnRemoveImageUrl }}" wire:confirm="Do you want to remove this image?"
          negative label="Remove Image" rounded="false" class="w-full" />
        <img src="{{ $isTemporaryUrl ? $imageUrl->temporaryUrl() : $imageUrl }}" alt="Temporary image" />
      </div>
    </div>
  </x-label>
@endif
