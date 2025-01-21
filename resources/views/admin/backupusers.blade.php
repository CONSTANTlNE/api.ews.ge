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

            {{-- Create New Backup User Modal--}}
            <button class="btn btn-primary mb-4"
                    data-pc-animate="3d-flip-horizontal" type="button"
                    data-pc-toggle="modal" data-pc-target="#createuser">
                New Backup User
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
                                <input type="text" name="name" class="form-control" placeholder="UserName">
                                <input type="text" name="domain" class="form-control mt-3" placeholder="Domain">
                                <input type="text" name="folderName" class="form-control mt-3"
                                       placeholder="Folder Name">
                                <input type="text" name="folderID" class="form-control mt-3" placeholder="Folder ID">
                                <input type="text" name="user_app_token" class="form-control mt-3"
                                       placeholder="User App Token">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-pc-modal-dismiss="#createuser">
                                    Close
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
                            <th class="text-center">User Name</th>
                            <th class="text-center">Token</th>
                            <th class="text-center">Active Folder</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $index=> $user)
                            <tr class="text-center">
                                <td>{{$user->created_at->format('d-m-Y')}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->tokens->first()?->unhashed_token}}
                                </td>
                                <td>
                                    <p>{{$user->folders->where('is_active', 1)->first()?->folderName}}</p>
                                    <p>{{$user->folders->where('is_active', 1)->first()?->folderID}}</p>
                                </td>
                                <td class="flex justify-center gap-3">
                                    <div class="mt-2 w-full flex gap-2">
                                        {{--Manual Backup--}}
                                        <form action="{{route('manual.backup')}}" method="post"
                                              class="flex align-middle">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                     viewBox="0 0 24 24">
                                                    <path fill="#3F78FF"
                                                          d="M19.35 10.04A7.49 7.49 0 0 0 12 4C9.11 4 6.6 5.64 5.35 8.04A5.994 5.994 0 0 0 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5c0-2.64-2.05-4.78-4.65-4.96M19 18H6c-2.21 0-4-1.79-4-4c0-2.05 1.53-3.76 3.56-3.97l1.07-.11l.5-.95A5.47 5.47 0 0 1 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5l1.53.11A2.98 2.98 0 0 1 22 15c0 1.65-1.35 3-3 3M8 13h2.55v3h2.9v-3H16l-4-4z"/>
                                                </svg>
                                            </button>
                                        </form>
                                        {{--Delete User Modal--}}
                                        <button data-pc-animate="3d-flip-horizontal" type="button"
                                                data-pc-toggle="modal" data-pc-target="#animateModal{{$index}}">
                                            <i data-feather="trash-2" style="color:red"></i>
                                        </button>
                                        @include('admin.partials_modals.delete_backupuser')
                                        {{--Folders Modal--}}
                                        <button data-pc-animate="3d-flip-horizontal" type="button"
                                                data-pc-toggle="modal" data-pc-target="#folders{{$index}}">
                                            <i data-feather="folder"></i>
                                        </button>
                                        @include('admin.partials_modals.folders_modal')
                                        {{--Backups Modal--}}
                                        <button data-pc-animate="3d-flip-horizontal" type="button"
                                                data-pc-toggle="modal" data-pc-target="#backups{{$index}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                 viewBox="0 0 20 20">
                                                <path fill="#3F78FF"
                                                      d="M13.65 2.88c3.93 2.01 5.48 6.84 3.47 10.77s-6.83 5.48-10.77 3.47a7.94 7.94 0 0 1-3.86-4.4l1.64-1.03a6.13 6.13 0 0 0 3.08 3.76c3.01 1.54 6.69.35 8.23-2.66A6.114 6.114 0 1 0 4.56 7.21l1.88.97l-4.95 3.08l-.39-5.82l1.78.91C4.9 2.4 9.75.89 13.65 2.88m-4.36 7.83A1 1 0 0 1 9 10c0-.07.03-.12.04-.19h-.01L10 5l.97 4.81L14 13l-4.5-2.12l.02-.02c-.08-.04-.16-.09-.23-.15"/>
                                            </svg>
                                        </button>
                                        @include('admin.partials_modals.bakups_modal')
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
                                    </div>
                                </td>
                            </tr>
                            <button onclick=""></button>
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