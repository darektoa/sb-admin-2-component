<x-layout app>
    @section('title', 'Transactions')
    <div class="col-lg-12 mb-4 p-0">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Transactions</h6>
                <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="get" action="">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search"
                        value="{{ request()->search ?? '' }}" aria-label="Search">
                    <input type="hidden" name="status" value="{{ request()->status }}">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body table-responsive" style="min-height: 400px">
                <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
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
            </div>
        </div>
    </div>
</x-layout>