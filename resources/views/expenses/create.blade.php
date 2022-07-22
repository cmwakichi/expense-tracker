<x-layout>
    <x-mycomponents.setting>
        <x-slot name="heading">
            Expense Create Form
        </x-slot>

        <form method="POST" action="/expenses">
            @csrf
            <x-mycomponents.input name="name"
                                  value="{{old('name')}}" />
            <x-mycomponents.input name="amount"
                                  value="{{ old('amount')}}" />
            <x-mycomponents.input name="description"
                                  value="{{old('description')}}" />
            <x-mycomponents.input name="expense_date" type="date"
                                  value="{{ old('expense_date') }}" />
            <x-mycomponents.field>
                <x-mycomponents.label name="category"/>
                <select name="category_id" id="category">
                    <option value="">--select category--</option>
                    @foreach($categories as $category)
                        <option value="{{old('category_id', $category->id)}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </x-mycomponents.field>
            <x-mycomponents.button type="submit">Add</x-mycomponents.button>
            <a href="/dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </a>

        </form>
    </x-mycomponents.setting>
</x-layout>
