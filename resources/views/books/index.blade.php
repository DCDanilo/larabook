<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Book') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('book.store')}}" method="POST">
                        @csrf
                        <div class="">
                            <label for="title" name="title">Titolo:</label>
                            <input type="text" name="title" id="title" class="" value="{{old('title')}}">
                        </div>

                        <div>
                            <label for="author" name="author">Autore:</label>
                            <input type="text" name="author" id="author" class="" value="{{old('author')}}">
                        </div>

                        <div>
                            <label for="publ_year" name="publ_year">Anno di pubblicazione:</label>
                            <input type="text" name="publ_year" id="publ_year" class="" value="{{old('publ_year')}}">
                        </div>

                        <x-primary-button class="mt-4">{{ __('Add Book') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>