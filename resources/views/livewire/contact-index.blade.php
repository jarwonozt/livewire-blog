<div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>
                    <span class="font-weight-bold">{{ $item->title }}</span>
                </td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td><span class="badge badge-pill badge-light-{{ $item->status == 1 ? 'primary':'danger' }} mr-1">{{ $item->status == 1 ? 'Active' : 'Non Active' }}</span></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center ml-1 mt-2">
        {{ $data->links() }}
    </div>
</div>
</div>
