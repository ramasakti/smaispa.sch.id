<x-dashboard title="{{ $title }}">
    <div class="table-responsive">
        <table class="table table-vcenter table-nowrap">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Role</th>
                    <th class="w-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $index => $role)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $role->role }}</td>
                        <td>
                            <a class="btn btn-icon" href="{{ route('access.role', $role->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-user-shield">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h2" />
                                    <path
                                        d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboard>
