@props(['expense'])
<x-layout>
    <div class="border rounded-sm border-black-500 block">
        <div>
            <span>{{$expense->category->name}}</span>
            <span>{{$expense->name}}</span>
        </div>
        <div>{{$expense->description}}</div>
        <div>
            <span>{{ $expense->amount }}</span>
            <span>{{ $expense->date }}</span>
        </div>
    </div>
</x-layout>
