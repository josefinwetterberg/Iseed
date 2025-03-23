{{-- Flytta över formuläret från dashboarden till en egen vy --}}
<x-app-layout>
    <x-slot name="header">
        <h1 class="page-title">
            {{ __('Add a New Seed') }}
        </h1>
       
        <a href="{{ route('dashboard') }}" class="underline">Back to dashboard</a>
    </x-slot>

    <div class="main-content">
        <div class="container">
            <div class="card">
                <div class="card-body">

                    @include('errors')

                    <form action="{{ route('seeds.store') }}" method="POST">
                        <x-form :categories="$categories" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>