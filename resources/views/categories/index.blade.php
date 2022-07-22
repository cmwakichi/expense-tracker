<x-layout>
    <div class="border border-black-700 block w-full">
        <div class="bg-green-500 text-white-500 w-32 text-center m-2">
            <a href="/category/create">Add Category</a>
        </div>
        <div>
            <h2 class="m-2">Category List</h2>
        </div>
        <div class="flex">
            <a class="bg-gray-500 p-1 text-sm ">Copy</a>
            <a>Csv</a>
            <a>Excel</a>
            <a>PDF</a>
            <a>Print</a>
        </div>
        <div class="border border-black-500 p-2">
            <table class="mx-auto">
                <thead class="w-full">
                    <th class="border bg-green-500 p-1">Name</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </thead>

                    @foreach($categories as $category)
                        <tbody>
                            <td class="border text-left">{{ $category->name }}</td>
                            <td class="border bg-red-700 p-1"><a>View</a></td>
                            <td class="border bg-red-700 p-1"><a
                                href="/categories/{{$category->id}}/edit">Edit</a></td>
                            <td class="border bg-red-700" p-1><a>Delete</a></td>
                        </tbody>
                    @endforeach
            </table>
            <div>
                {{$categories->links();}}
            </div>
        </div>

    </div>
</x-layout>
