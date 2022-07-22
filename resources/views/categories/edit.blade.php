<x-layout>
    <x-mycomponents.setting>
        <x-slot name="heading">
            Expense Edit Form
        </x-slot>

        <form method="POST" action="/categories">
            @csrf
            @method('PATCH')
            <x-mycomponents.input name="name"
                                  value="{{old('name',$category->name)}}"/>

            <x-mycomponents.button type="submit">Edit</x-mycomponents.button>
            <a href="/dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </a>

        </form>
    </x-mycomponents.setting>
</x-layout>
