<section>
    <nav class="navbar navbar-expand-lg navbar-light pink lighten-5">
        <div class="container">
            <a class="navbar-brand" href="#" title="Matu Things (Chin Traditional Baby Items)">
                <img src="{{asset('css/images/mylogo.PNG')}}" class="my-width">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-4  {{(request()->is('/')) ? 'active' : ''}}">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item dropdown mr-5 {{(request()->is('products*')) ? 'active' : ''}}">
                     
                        <a class="nav-link waves-effect waves-light" href="/products" >Products</a>
                        <span data-toggle="dropdown" class=" dropdown-toggle float-right btn p-1 my-dropdown"></span>
                      
                        <div class="dropdown-menu dropdown-info pink darken-4 rounded-0 mt-2 pb-0" aria-labelledby="navbarDropdownMenuLink">
                            <?php $category = App\Backend\Category::all() ?>
                            @foreach ($category as $get)
                                <?php $replacingname = str_replace(' ', '-', $get->cat_name) ?>
                                <a class="dropdown-item waves-effect waves-light white-text p-2" href="/products/{{$get->id}}/{{$replacingname}}">{{$get->cat_name}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item mr-4 {{(request()->is('gallery')) ? 'active' : ''}}">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item {{(request()->is('contact')) ? 'active' : ''}}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>