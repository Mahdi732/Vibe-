@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}></textarea>
<div class="col-span-6 sm:col-span-4">
    <x-label for="bio" value="{{ __('Bio') }}" />
    <x-textarea id="bio"  class="mt-1 block w-full" wire:model="state.bio" required autocomplete="bio" />
</div>
