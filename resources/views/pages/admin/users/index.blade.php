<x-layout app>
    <x-layout.section title="Users" />
    <x-card class="mb-4">
        <x-card.head>
            <x-text bold color="primary" value="Users" />
            <x-button.modal class="ms-3" target="modalAddUser" value="Add User"/>
            <x-form method="GET" class="ms-auto d-none d-md-flex">
                <x-input name="search" placeholder="Search..." value="{{ request()->search ?? '' }}" class="me-2"/>
                <x-button outline type="submit" value="Search" />
            </x-form>
        </x-card.head>
        <x-card.body class="table-responsive">
            <x-modal id="modalAddUser" title="Add User" :action="route('users.store')">
                <x-modal.body>
                    <x-input type="text" name="name" label="Name:" class="mb-3" />
                    <x-input type="text" name="email" label="Email:" class="mb-3" />
                    <x-input value="password" label="Default Password:" class="mb-3" readonly />
                </x-modal.body>
            </x-modal>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $user)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $user->name }}</td>
                        <td class="align-middle">{{ $user->email }}</td>
                        <td class="align-middle">
                            <x-button color="danger">
                                <i class="fas fa-trash"></i>
                            </x-button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            {{ $users->links() }}
        </x-card.body>
    </x-card>
</x-layout>