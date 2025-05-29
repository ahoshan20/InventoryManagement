@extends('admin.layouts.master', ['page_slug' => 'customer'])
@section('titel','Customer');
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">{{ __('Customer List') }}</h4>
                    <a href="{{ route('customer.create') }}" class="btn btm-sm btn-primary">{{ __('Add customer') }}</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="tableData">
                        <thead>
                            <tr>
                                <th>{{ __('SL') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Created At') }}</th>
                                <th>{{ __('Created_by') }}</th>
                                <th>{{ __('Active') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td><span class="badge {{ $customer->status_color }}">{{ $customer->status_label }}</span></td>
                                    <td>{{ date('d, M, Y', strtotime($customer->created_at)) }}</td>
                                    <td>{{ $customer->creater ? $customer->creater->name : 'System' }}</td>
                                    <td>
                                        <div class="btn-group d-flex align-items-center gap-3 flex-wrap">
                                            <a href="javascript:void(0)"
                                                class="btn btn-primary btn-rounded d-flex justify-content-center align-items-center p-2"
                                                style="max-width: 30px; max-height: 30px;" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="icon-options-vertical"></i>

                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="{{ route('customer.edit', encrypt($customer->id)) }}"
                                                        class="dropdown-item">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('customer.status', encrypt($customer->id)) }}"
                                                        class="dropdown-item">
                                                        <span>{{ $customer->status_btn_label }}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item"
                                                        onclick='confirmationAlert(()=> document.getElementById("delete_form{{ $loop->iteration }}").submit())'>Delete</a>

                                                    <form id="delete_form{{ $loop->iteration }}"
                                                        action="{{ route('customer.destroy', encrypt($customer->id)) }}"
                                                        method="POST" class="d-none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#tableData').DataTable({
                order: [
                    [0, 'desc']
                ],
                lengthMenu: [5, 10, 15],
				layout: {
					topStart: {
						buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
					}
				}
			});
        });
    </script>
@endpush
