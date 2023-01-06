<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Type</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $no=>$item)
            <tr class="">
                <td class="">
                    {{ $no }}
                </td>
                <td class="">
                    {{ $item['name'] }}
                </td>
                <td class="">
                    {{ 'ww' }}
                </td>
                <td class="">
                    {{ $item['quantity'] }}
                </td>
                <td class="">
                    ${{ $item['price'] }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>