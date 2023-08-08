{{-- html --}}
<html x-cloak lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') || localStorage.setItem('darkMode', 'system') }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
    x-bind:class="{
        'dark': darkMode === 'dark' || (darkMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)')
            .matches)
    }">
{{-- style --}}
<style>
    [x-cloak] {
        display: none;
    }
</style>
