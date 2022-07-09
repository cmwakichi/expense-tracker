<x-layout>
    <div class="border border-black-700 block w-full bg-gray-100">
        <div class="bg-green-500 text-white-500 w-32 text-center m-2 border">
            <a href="#">Add Expense</a>
        </div>
        <div>
            <h2 class="m-2">Expenses List</h2>
        </div>
        <div class="border border-black-500 p-2">
            <table>
                <thead class="w-full">
                <th class="border bg-green-500 p-1">Id</th>
                <th class="border bg-green-500 p-1">Category</th>
                <th class="border bg-green-500 p-1">Description</th>
                <th class="border bg-green-500 p-1">Amount</th>
                <th class="border bg-green-500 p-1">Expense date</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </thead>

                @foreach($expenses as $expense)
                    <tbody>
                    <td class="border text-center">{{ $expense->id }}</td>
                    <td class="border text-center">{{ $expense->category }}</td>
                    <td class="border text-center">{{ $expense->description }}</td>
                    <td class="border text-center">{{ $expense->expense_date }}</td>
                    <td class="border text-center">{{ $expense->amount }}</td>
                    <td class="border bg-blue-700 p-1"><a>View</a></td>
                    <td class="border bg-blue-700 p-1"><a>Edit</a></td>
                    <td class="border bg-red-700" p-1><a>Delete</a></td>
                    </tbody>
                @endforeach

            </table>
        </div>

    </div>
</x-layout>
