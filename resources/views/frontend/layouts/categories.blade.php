<div class="grid-30 connect_outer">
    <h1>Collections</h1>

    <div class="grid-container">
        <div class="grid-50 tablet-grid-50 mobile-grid-50 border_right">
            <ul class="list_left">


                @foreach($data['categories'] as $category)
                    <li>


                        <a href="/collections/guitars">{{$category->name}}</a>

                    </li>
                @endforeach


            </ul>
        </div>


    </div>



</div>