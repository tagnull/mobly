<h3>{{ __('page.my_account.menu.orders') }}</h3>
<div class="table-responsive">
    @if($orders->count())
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('field.date') }}</th>
                <th>{{ __('field.status') }}</th>
                <th>{{ __('field.payment_method') }}</th>
                <th>{{ __('field.total') }}</th>
                <th>{{ __('field.actions') }}</th>                
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at->format('d/m/Y') }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ __('payment.'.$order->payment_method) }}</td>
                <td>@currency($order->total)</td>
                <td><a class="btn btn-secondary" href="{{ route('orders.show', $order->uuid) }}" target="_blank">{{ __('button.view') }}</a></td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><strong>@currency($total)</strong></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    @else
    <p>{{ __('page.my_account.orders.nothing_here') }}</p>
    @endif
</div>