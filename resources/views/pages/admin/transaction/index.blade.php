<x-layout app>
    <x-layout.section title="Transactions" />
    <x-card class="mb-4">
        <x-card.head>
            <x-text bold color="primary" value="Transactions" />
            <x-form method="GET" class="ms-auto d-none d-md-flex">
                <x-input name="search" placeholder="Search..." value="{{ request()->search ?? '' }}" class="me-2"/>
                <x-button.submit outline value="Search" />
            </x-form>
        </x-card.head>
        <x-card.body>
            <x-table.instant 
                :data="$transactions->items()"
                hidden="updated_at"
                visible="created_at:created on" />

            {{ $transactions->links() }}
        </x-card.body>
    </x-card>
</x-layout>