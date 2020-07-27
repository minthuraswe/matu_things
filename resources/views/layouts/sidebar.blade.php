<div class="sidebar position-fixed" style="width: 227.5px;height:700px;">
    <li class="border-bottom list-unstyled">
        <h5 class="border-0  pt-3 pb-2 pl-3 clcc text-center">Matu Things</h5>
    </li>
    <ul class="list-unstyled">
        <a href="/dashboard">
            @if(request()->is('dashboard'))
            <li class="p-3 active">
                <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="pb-1 bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  </svg> Home
            </li>
            @else
            <li class="p-3">
                <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="pb-1 bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  </svg> Home
            </li>
            @endif
        </a>
        <a href="/pd">
        @if(request()->is('pd*'))
        <li class="p-3 active">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="pb-1 bi bi-bag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4h14v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm7-2.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
                </svg> Products
                <span class="badge badge-light float-right">{{$count_pd}}</span>
        </li>
        @else
        <li class="p-3">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="pb-1 bi bi-bag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
                </svg> Products
                <span class="badge badge-light float-right">{{$count_pd}}</span>
        </li>
        @endif
        </a>
        <a href="/cat">
            @if(request()->is('cat*'))
            <li class="p-3 active">
                <svg class="bi bi-folder-fill pb-1" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                </svg> Category
                <span class="badge badge-light float-right">{{$count_cat}}</span>
            </li>
            @else
            <li class="p-3">
                <svg class="bi bi-folder pb-1" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z" />
                    <path fill-rule="evenodd"
                        d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z" />
                </svg> Category
                <span class="badge badge-light float-right">{{$count_cat}}</span>
            </li>
            @endif
        </a>
        {{-- <li class="p-3 border-top clcc" style="margin-top:9rem;">
            <span style="font-size:14px;">Copyright &copy; 2020 clcc.</span>
        </li> --}}

    </ul>
</div>