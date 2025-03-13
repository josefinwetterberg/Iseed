{{-- Flytta över formuläret från dashboarden till en egen vy --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="page-title">
            {{ __('Add a New Seed') }}
        </h2>
    </x-slot>

    <div class="main-content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Add a New Seed</h1>

                    @include('errors')

                    <form action="{{ route('seeds.store') }}" method="POST">
                        <x-form />

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>