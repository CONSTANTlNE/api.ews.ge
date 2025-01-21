<div id="folders{{$index}}" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="animateModalLabel"
     aria-hidden="true">
    <div style="justify-content: center;align-items: center"
         class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{--                                                    <h5 class="modal-title">Folders</h5>--}}
                {{-- Create Folder Button--}}
                <button data-pc-animate="3d-flip-horizontal" type="button"
                        data-pc-toggle="modal"
                        class="btn btn-primary"
                        data-pc-target="#addfolder{{$index}}">
                    Create New Folder
                </button>
                <button data-pc-modal-dismiss="#folders{{$index}}"
                        class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body"
                 style="overflow: auto!important">
                <table class="w-full">
                    <thead>
                    <tr>
                        <th style="text-align: center!important"
                            class="text-center">Folder Name
                        </th>
                        <th style="text-align: center!important"
                            class="text-center">Folder ID
                        </th>
                        <th style="text-align: center!important"
                            class="text-center">Active
                        </th>
                        <th style="text-align: center!important"
                            class="text-center">Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->folders as $folderindex => $folder)
                        <tr class="">
                            <td class="text-center mt-2 mb-2">{{$folder->folderName}}</td>
                            <td class="text-center mt-2 mb-2"><p>{{$folder->folderID}}</p> </td>
                            <td class="text-center mt-2 mb-2">
                                <div class="form-check form-switch justify-center">
                                    <form action="{{ route('folder.activate') }}"
                                          method="post">
                                        @csrf
                                        <input type="hidden" name="folder_id"
                                               value="{{ $folder->id }}">
                                        <input type="checkbox"
                                               class="cursor-pointer form-check-input checked:!bg-success-500 checked:!border-success-500"
                                               {{ $folder->is_active ? 'checked' : '' }}
                                               onclick="this.form.submit()">
                                    </form>
                                </div>
                            </td>
                            <td class="text-center">
                                {{--Delete folder button--}}
                                <button style="margin-top: 5px!important"
                                        data-pc-animate="3d-flip-horizontal"
                                        type="button"
                                        data-pc-toggle="modal"
                                        data-pc-target="#deletefolder{{$index}}">
                                    <i data-feather="trash-2"
                                       style="color:red"></i>
                                </button>
                                {{--delete folder Modal--}}
                                <div id="deletefolder{{$folderindex}}" class="modal fade"
                                     tabindex="-1"
                                     style="overflow: visible"
                                     role="dialog"
                                     aria-labelledby="animateModalLabel"
                                     aria-hidden="true">
                                    <div style="justify-content: center;align-items: center"
                                         class="modal-dialog modal-dialog-centered "
                                         role="document">
                                        <form action="{{route('folder.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="folder_id"
                                                   value="{{$folder->id}}">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete Folder</h5>
                                                    <button data-pc-modal-dismiss="#deletefolder{{$folderindex}}"
                                                            class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                                                        <i class="ti ti-x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body"
                                                     style="overflow: visible">
                                                    are you sure to delete Folder
                                                    : {{$folder->folderName}} ?
                                                </div>
                                                <div class="modal-footer"
                                                     style="justify-content: center">
                                                    <button type="button"
                                                            class="btn btn-secondary"
                                                            data-pc-modal-dismiss="#deletefolder{{$folderindex}}">
                                                        Close
                                                    </button>
                                                    <button
                                                            class="btn btn-primary ltr:ml-2 trl:mr-2">
                                                        delete
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{--Add New Folder Modal--}}
                <div id="addfolder{{$index}}" class="modal fade" tabindex="-1"
                     style="overflow: visible" role="dialog"
                     aria-labelledby="animateModalLabel"
                     aria-hidden="true">
                    <div style="justify-content: center;align-items: center"
                         {{--modal-dialog-centered--}}
                         class="modal-dialog  " role="document">
                        <form action="{{route('folder.create')}}"
                              method="post">
                            @csrf
                            <input type="hidden" name="user_id"
                                   value="{{$user->id}}">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add
                                        Folder ID</h5>
                                    <button data-pc-modal-dismiss="#addfolder{{$index}}"
                                            class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                                        <i class="ti ti-x"></i>
                                    </button>
                                </div>
                                <div class="modal-body backdrop-blur">
                                    <input type="text"
                                           name="folderID"
                                           class="form-control"
                                           placeholder="Folder ID">
                                    <input type="text"
                                           name="folderName"
                                           class="form-control mt-3"
                                           placeholder="Folder Name">
                                </div>
                                <div style="justify-content: center!important"
                                     class="modal-footer">
                                    <button type="button"
                                            class="btn btn-secondary"
                                            data-pc-modal-dismiss="#addfolder{{$index}}">
                                        Close
                                    </button>
                                    <button class="btn btn-primary ltr:ml-2 trl:mr-2">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div style="justify-content: center!important" class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-pc-modal-dismiss="#folders{{$index}}">Close
                </button>
            </div>
        </div>
    </div>
</div>