<div id="backups{{$index}}" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="animateModalLabel"
     aria-hidden="true">
    <div style="justify-content: center;align-items: center"
         class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button data-pc-modal-dismiss="#backups{{$index}}"
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
                            class="text-center">Date
                        </th>
                        <th style="text-align: center!important"
                            class="text-center">Folder Name
                        </th>
                        <th style="text-align: center!important"
                            class="text-center">File Name
                        </th>
                        <th style="text-align: center!important"
                            class="text-center">Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->files  as $fileindex=> $file)
                        <tr class="">
                            <td class="text-center mt-2 mb-2">{{$file->created_at->format('d-m-Y')}}</td>
                            <td class="text-center mt-2 mb-2">{{$file->driveFolder->folderName}}</td>
                            <td class="text-center mt-2 mb-2">{{$file->file_name}}</td>
                            <td class="text-center">
                                {{--Delete Backup button--}}
                                <button style="margin-top: 5px!important"
                                        data-pc-animate="3d-flip-horizontal"
                                        type="button"
                                        data-pc-toggle="modal"
                                        data-pc-target="#deletebackup{{$fileindex}}">
                                    <i data-feather="trash-2"
                                       style="color:red"></i>
                                </button>
                                <div id="deletebackup{{$fileindex}}" class="modal fade"
                                     tabindex="-1"
                                     style="overflow: visible"
                                     role="dialog"
                                     aria-labelledby="animateModalLabel"
                                     aria-hidden="true">
                                    <div style="justify-content: center;align-items: center"
                                         class="modal-dialog modal-dialog-centered "
                                         role="document">
                                        <form action="{{route('backup.file.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="file_id"
                                                   value="{{$file->id}}">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete Folder</h5>
                                                    <button data-pc-modal-dismiss="#deletebackup{{$fileindex}}"
                                                            class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                                                        <i class="ti ti-x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body"
                                                     style="overflow: visible">
                                                    are you sure to delete Folder
                                                    : {{$file->file_name}} ?
                                                </div>
                                                <div class="modal-footer"
                                                     style="justify-content: center">
                                                    <button type="button"
                                                            class="btn btn-secondary"
                                                            data-pc-modal-dismiss="#deletebackup{{$fileindex}}">
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

            </div>
            <div style="justify-content: center!important" class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-pc-modal-dismiss="#backups{{$index}}">Close
                </button>
            </div>
        </div>
    </div>
</div>