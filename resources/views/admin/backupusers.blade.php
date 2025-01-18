@extends('components.layout')

@section('backupusers')
    <!-- [ breadcrumb ] start -->
    {{--<div class="page-header">--}}
    {{--  <div class="page-block">--}}
    {{--    <ul class="breadcrumb">--}}
    {{--      <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>--}}
    {{--      <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>--}}
    {{--      <li class="breadcrumb-item" aria-current="page">Form Basic</li>--}}
    {{--    </ul>--}}
    {{--    <div class="page-header-title">--}}
    {{--      <h2 class="mb-0">Form Basic</h2>--}}
    {{--    </div>--}}
    {{--  </div>--}}
    {{--</div>--}}
    <!-- [ breadcrumb ] end -->


    <!-- [ Main Content ] start -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 md:col-span-4">

            <button class="btn btn-primary mb-4"
                    data-pc-animate="3d-flip-horizontal" type="button"
                    data-pc-toggle="modal" data-pc-target="#createuser"
            >NewUser
            </button>
            <div id="createuser" class="modal fade" tabindex="-1" role="dialog"
                 aria-labelledby="animateModalLabel"
                 aria-hidden="true">
                <div style="justify-content: center;align-items: center"
                     {{--modal-dialog-centered--}}
                     class="modal-dialog  " role="document">
                    <form action="{{route('backupusers.create')}}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create User for Backup</h5>
                                <button data-pc-modal-dismiss="#createuser"
                                        class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                                    <i class="ti ti-x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-pc-modal-dismiss="#createuser">Close
                                </button>
                                <button type="submit" class="btn btn-primary ltr:ml-2 trl:mr-2">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="col-span-12">
        <div class="card">
            <div class="card-header">
                <h5>Tokens</h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table" id="pc-dt-simple">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center">Created</th>
                            <th class="text-center">Token Name</th>
                            <th class="text-center">Token</th>
                            <th class="text-center">Usage</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $index=> $user)
                            <tr class="text-center">
                                <td>{{$user->created_at->format('d-m-Y')}}</td>
                                <td>{{$user->name}}</td>
                                <td class="flex justify-center gap-3">
                                    {{$user->tokens->first()?->unhashed_token}}
                                </td>
                                <td>Usage</td>
                                <td class="flex justify-center gap-3">
                                    {{--Delete Modal--}}
                                    <button data-pc-animate="3d-flip-horizontal" type="button"
                                            data-pc-toggle="modal" data-pc-target="#animateModal{{$index}}">

                                        <i data-feather="trash-2" style="color:red"></i>

                                    </button>
                                    <div id="animateModal{{$index}}" class="modal fade" tabindex="-1" role="dialog"
                                         aria-labelledby="animateModalLabel"
                                         aria-hidden="true">
                                        <div style="justify-content: center;align-items: center"
                                             class="modal-dialog modal-dialog-centered " role="document">
                                            <form action="{{route('token.delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="token_id" value="{{$user->id}}">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Animate Modal</h5>
                                                        <button data-pc-modal-dismiss="#animateModal{{$index}}"
                                                                class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        are you sure to delete this token ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-pc-modal-dismiss="#animateModal{{$index}}">Close
                                                        </button>
                                                        <button type="button" class="btn btn-primary ltr:ml-2 trl:mr-2">
                                                            delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{--Create Folder Modal--}}
                                    <button data-pc-animate="3d-flip-horizontal" type="button"
                                            data-pc-toggle="modal" data-pc-target="#addfolder{{$index}}">
                                        <i data-feather="folder"></i>
                                    </button>
                                    <div id="addfolder{{$index}}" class="modal fade" tabindex="-1" role="dialog"
                                         aria-labelledby="animateModalLabel"
                                         aria-hidden="true">
                                        <div style="justify-content: center;align-items: center"
                                             class="modal-dialog" role="document">
                                            <form action="{{route('folder.create')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{$user->id}}">

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Folder ID</h5>
                                                        <button data-pc-modal-dismiss="#addfolderaddfolderaddfolderaddfolder{{$index}}"
                                                                class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" name="folderID" class="form-control"
                                                               placeholder="Folder ID">
                                                        <input type="text" name="folderName" class="form-control mt-3"
                                                               placeholder="Folder Name">
                                                    </div>
                                                    <div style="justify-content: center!important" class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-pc-modal-dismiss="#addfolder{{$index}}">Close
                                                        </button>
                                                        <button class="btn btn-primary ltr:ml-2 trl:mr-2">
                                                            Create
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{--Create Token--}}

                                    @if(!$user->tokens->isNotEmpty())

                                        <form action="{{route('backupusers.token.create')}}" method="post"
                                              class="flex align-middle">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <button style="all: unset;cursor: pointer" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                     viewBox="0 0 24 24">
                                                    <path fill="#fff"
                                                          d="M7 14q-.825 0-1.412-.587T5 12t.588-1.412T7 10t1.413.588T9 12t-.587 1.413T7 14m0 4q-2.5 0-4.25-1.75T1 12t1.75-4.25T7 6q1.675 0 3.038.825T12.2 9h8.375q.2 0 .388.075t.337.225l2 2q.15.15.212.325t.063.375t-.063.375t-.212.325l-3.175 3.175q-.125.125-.3.2t-.35.1t-.35-.025t-.325-.175L17.5 15l-1.425 1.075q-.125.1-.275.15t-.3.05t-.313-.05t-.287-.15L13.375 15H12.2q-.8 1.35-2.163 2.175T7 18m0-2q1.4 0 2.463-.85T10.875 13H14l1.45 1.025v.013v-.013L17.5 12.5l1.775 1.375L21.15 12h-.012h.012l-1-1v-.012V11h-9.275q-.35-1.3-1.412-2.15T7 8Q5.35 8 4.175 9.175T3 12t1.175 2.825T7 16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <script type="module">
        import {DataTable} from '../assets/js/plugins/module.js';

        // window.dt = new DataTable('#pc-dt-simple');

        let dataTable = new DataTable("#pc-dt-simple", {
            searchable: false,
            fixedHeight: true,
            perPage: 5,
        });

        const sorters = document.querySelectorAll('.datatable-sorter')
        sorters.forEach((sorter) => {
            sorter.style.textAlign = 'center';
        })

    </script>
@endsection