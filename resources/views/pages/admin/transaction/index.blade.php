<x-layout app>
    <x-layout.section title="Transactions" />
    <x-card class="mb-4">
        <x-card.head>
            <x-text bold color="primary" value="Transactions" />
            <x-form inline method="GET" class="ml-auto d-none d-md-flex">
                <x-input name="search" placeholder="Search..." value="{{ request()->search ?? '' }}" class="mr-2"/>
                <x-button.submit outline value="Search" />
            </x-form>
        </x-card.head>
        <x-card.body>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td class="align-middle h6">{{ $transaction->receiver->name }}</td>
                        <td class="align-middle h6">{{ $transaction->code }}</td>
                        <td class="align-middle h6">{{ number_format($transaction->amount) }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $transactions->links() }}
        </x-card.body>
    </x-card>
</x-layout>