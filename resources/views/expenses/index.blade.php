<x-layout>
    <div class="border border-black-700 block w-full">
        <div class="bg-green-200 text-white-500 w-32 text-center m-2 border">
            <a href="#">Add Expense</a>
        </div>
        <div>
            <h2 class="m-2">Expenses List</h2>
        </div>
        <div class="flex items-center">
            <a href="#" class="bg-gray-300 p-1 text-sm m-2">Copy</a>
            <a href="#" class="bg-gray-300 p-1 text-sm m-2">Csv</a>
            <a href="#" class="bg-gray-300 p-1 text-sm m-2">Excel</a>
            <a href="#" class="bg-gray-300 p-1 text-sm m-2">PDF</a>
            <a href="#" class="bg-gray-300 p-1 text-sm m-2">Print</a>
            <form>
                <label for="search" class="text-semibold">search:</label>
                <input type="search" id="search" name="search">
            </form>
        </div>
        <div class="border border-black-500 p-2">
            <table>
                <thead class="w-full">
                <th class="border bg-green-200 p-1">Id</th>
                <th class="border bg-green-200 p-1">Category</th>
                <th class="border bg-green-200 p-1">Description</th>
                <th class="border bg-green-200 p-1">Amount</th>
                <th class="border bg-green-200 p-1">Expense date</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </thead>

                @foreach($expenses as $expense)
                    <div>
                        <tbody>
                            <td class="border text-center">{{ $expense->id }}</td>
                            <td class="border text-center underline"><a href="#">{{ $expense->category->name }}</a></td>
                            <td class="border text-center">{{ $expense->description }}</td>
                            <td class="border text-center">{{ $expense->amount }}</td>
                            <td class="border text-center">{{ $expense->expense_date }}</td>
                            <td class="border bg-blue-700 p-1 underline"><a href="/expenses/{{$expense->id}}" title="view expense card">View</a></td>
                            <td class="border bg-blue-700 p-1 underline"><a href="/expenses/{{$expense->id}}/edit">Edit</a></td>
                            <td class="border bg-red-700 p-1 underline"><a href="#">Delete</a></td>
                        </tbody>
                    </div>
                @endforeach

            </table>
        </div>

    </div>
</x-layout>
