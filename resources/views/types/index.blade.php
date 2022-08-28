@extends('app.app')

@section('content')
<div class="flex w-full flex-row gap-5">
    <a href="{{ route('types.create') }}" class="bg-slate-800 rounded-md text-white px-4 py-2 text-md">
        Create
    </a>
    <a href="{{ route('items.index') }}" class="bg-indigo-800 rounded-md text-white px-4 py-2 text-md">
        Items
    </a>
</div>
<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $index=>$type)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-gray-50' }} border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $index + $types->firstItem() }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $type->name }}
                            </td>
                            <td class="flex gap-5 text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <form action="{{ route('types.destroy', $type) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('types.edit', $type) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{ $types->links() }}
@endsection