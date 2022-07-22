<x-layout>
    <div class="border rounded-xl mx-auto max-w-xl mt-10 border-black-500 block text-center text-sm">
        <div class="p-1 rounded-xl m-2">
            <div class="p-2 bg-gray-100">
                <p class="text-blue-500">Expense category:</p>
                <b>{{$expense->category->name}}</b>
            </div>
            <div class="p-2 bg-gray-100">
                <p class="text-blue-500">Expense name:</p>
                <b>{{$expense->name}}</b>
            </div>
            <div class="block bg-gray-100 m-2 p-4">
                <p class="text-blue-500">Expense description:</p>
                <b>{{$expense->description}}</b>
            </div>
            <div class="m-2 flex justify-between">
                <div class="bg-green-500 rounded-sm p-1">
                    <span>Amount:</span>{{ $expense->amount }}
                </div>
                <div class="bg-green-500 rounded-sm p-1">
                    <span>Expense-date:</span>{{ $expense->expense_date }}
                </div>
            </div>
        </div>
    </div>
</x-layout>
